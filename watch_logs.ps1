$logPath = "c:\Users\MSI\Desktop\projet\projet_web_java_novas\var\log\dev.log"
$lastSize = 0

while ($true) {
    $currentSize = (Get-Item $logPath).Length
    
    if ($currentSize -gt $lastSize) {
        # Nouveau contenu
        $content = Get-Content $logPath -Tail 50
        $content | Select-String -Pattern "ERROR|Exception|tuteur|openai" | ForEach-Object {
            Write-Host $_ -ForegroundColor Red
        }
        $lastSize = $currentSize
    }
    
    Start-Sleep -Milliseconds 500
}
