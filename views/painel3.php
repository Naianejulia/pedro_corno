<?php
namespace Modules\ZabbixgfMain\Views;

class painel3 {
    public function show(): void {
        ?>
        <link rel="stylesheet" type="text/css" href="modules/ZabbixgfMain/assets/css/grafanamonzabbix.css">
        
        <div class="grafana-info">
            <h2>Painel 3: Desempenho de Hosts</h2>
        </div>

        <div class="grafana-container">
            <iframe 
                class="grafana-iframe"
                src="https://grafana.seusite.com/d/painel3"
                width="100%" 
                height="800" 
                frameborder="0">
            </iframe>
        </div>
        <?php
    }
}

