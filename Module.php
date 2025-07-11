<?php
namespace Modules\ZabbixgfMain;

use Zabbix\Core\CModule,
    APP,
    CMenuItem;

class Module extends CModule {
    public function init(): void {
        $menu = APP::Component()->get('menu.main');

        $grafanaMenu = new CMenuItem(_('Grafana'));
        $grafanaMenu->setIcon('icon-dashboard');

        $grafanaMenu->addItem((new CMenuItem(_('Painel 1')))->setAction('zabbixgfmain.painel1'));
        $grafanaMenu->addItem((new CMenuItem(_('Painel 2')))->setAction('zabbixgfmain.painel2'));
        $grafanaMenu->addItem((new CMenuItem(_('Painel 3')))->setAction('zabbixgfmain.painel3'));
        $grafanaMenu->addItem((new CMenuItem(_('Painel 4')))->setAction('zabbixgfmain.painel4'));

        $menu->add($grafanaMenu);
    }
}


