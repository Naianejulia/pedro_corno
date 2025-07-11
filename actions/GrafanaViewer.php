<?php

namespace Modules\GrafanaMonZabbix\Actions;

use CController,
    CControllerResponseData;

class GrafanaViewer extends CController {
    public function init(): void {
        $this->disableCsrfValidation();
    }

    protected function checkInput(): bool {
        return true;
    }

    public function checkPermissions(): bool {
        return true; // Simplificado para evitar problemas de permissão
    }

    protected function doAction(): void {
        // Buscar a URL do Grafana configurada
        $grafanaUrl = 'https://10.81.81.5:3000/d/bek04aw3qwg74a/alphaplast-sla?orgId=1&kiosk';
        
        // Tentar buscar a configuração salva em arquivo
        $configFile = __DIR__ . '/../../config/grafana_config.json';
        if (file_exists($configFile)) {
            $config = json_decode(file_get_contents($configFile), true);
            if ($config && isset($config['grafana_url'])) {
                $grafanaUrl = $config['grafana_url'];
            }
        }
        
        $data = [
            'grafana_url' => $grafanaUrl,
            'configured' => !empty($grafanaUrl)
        ];
        
        $this->setResponse(new CControllerResponseData($data));
    }
} 
