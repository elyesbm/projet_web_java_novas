<?php
$baseUrl = 'https://raw.githubusercontent.com/justadudewhohacks/face-api.js/master/weights/';
$models = [
    'tiny_face_detector_model-weights_manifest.json',
    'tiny_face_detector_model-shard1',
    'face_landmark_68_model-weights_manifest.json',
    'face_landmark_68_model-shard1',
    'face_recognition_model-weights_manifest.json',
    'face_recognition_model-shard1',
    'face_recognition_model-shard2'
];

$dest = __DIR__ . '/public/js/face-api-weights/';
if (!is_dir($dest)) {
    mkdir($dest, 0777, true);
}

foreach ($models as $model) {
    if (!file_exists($dest . $model)) {
        echo "Downloading $model...\n";
        $content = file_get_contents($baseUrl . $model);
        if ($content !== false) {
            file_put_contents($dest . $model, $content);
        } else {
            echo "Failed to download $model\n";
        }
    } else {
        echo "Exists $model\n";
    }
}
echo "Done\n";
