<?php
namespace Modules\ZabbixgfMain\Views;

class painel5 {
    public function show(): void {
        ?>
        <link rel="stylesheet" type="text/css" href="modules/ZabbixgfMain/assets/css/grafanamonzabbix.css">
        
        <div class="grafana-info">
            <h2>Painel 5: obsidade</h2>
        </div>

        <div class="grafana-container">
            <iframe 
                class="grafana-iframe"
                src="https://grafana.seusite.com/d/painel4"
                width="100%" 
                height="800" 
                frameborder="0">
            </iframe>
        </div>
        <?php
    }
}