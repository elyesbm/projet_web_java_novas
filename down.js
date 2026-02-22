const fs = require('fs');
const https = require('https');
const path = require('path');

const baseUrl = 'https://raw.githubusercontent.com/justadudewhohacks/face-api.js/master/weights/';
const models = [
    'tiny_face_detector_model-weights_manifest.json',
    'tiny_face_detector_model-shard1',
    'face_landmark_68_model-weights_manifest.json',
    'face_landmark_68_model-shard1',
    'face_recognition_model-weights_manifest.json',
    'face_recognition_model-shard1',
    'face_recognition_model-shard2'
];

const dest = path.join(__dirname, 'public', 'js', 'face-api-weights');
if(!fs.existsSync(dest)){
	fs.mkdirSync(dest, {recursive:true});
}

function download(file) {
    return new Promise((resolve, reject) => {
        const fileStream = fs.createWriteStream(path.join(dest, file));
        https.get(baseUrl + file, (response) => {
            if (response.statusCode === 200) {
                response.pipe(fileStream);
                fileStream.on('finish', () => {
                    fileStream.close();
                    console.log('Downloaded ' + file);
                    resolve();
                });
            } else {
                reject(new Error(`Failed to download ${file}: ${response.statusCode}`));
            }
        }).on('error', (err) => {
            fs.unlinkSync(path.join(dest, file));
            reject(err);
        });
    });
}

async function run() {
    for (const model of models) {
        await download(model);
    }
}

run().catch(console.error);
