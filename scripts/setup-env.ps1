$examplePath = Join-Path $PSScriptRoot "..\\.env.local.example"
$targetPath = Join-Path $PSScriptRoot "..\\.env.local"

if (-not (Test-Path $examplePath)) {
    Write-Error "Missing .env.local.example"
    exit 1
}

if (Test-Path $targetPath) {
    Write-Host ".env.local already exists. No changes made."
    exit 0
}

Copy-Item -Path $examplePath -Destination $targetPath
Write-Host ".env.local created from .env.local.example. Replace CHANGE_ME with your real key."
