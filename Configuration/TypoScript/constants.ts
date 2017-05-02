
plugin.tx_webuser_fewebuser {
  view {
    # cat=plugin.tx_webuser_fewebuser/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:webuser/Resources/Private/Templates/
    # cat=plugin.tx_webuser_fewebuser/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:webuser/Resources/Private/Partials/
    # cat=plugin.tx_webuser_fewebuser/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:webuser/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_webuser_fewebuser//a; type=string; label=Default storage PID
    storagePid =
  }
}

module.tx_webuser_bewebuser {
  view {
    # cat=module.tx_webuser_bewebuser/file; type=string; label=Path to template root (BE)
    templateRootPath = EXT:webuser/Resources/Private/Backend/Templates/
    # cat=module.tx_webuser_bewebuser/file; type=string; label=Path to template partials (BE)
    partialRootPath = EXT:webuser/Resources/Private/Backend/Partials/
    # cat=module.tx_webuser_bewebuser/file; type=string; label=Path to template layouts (BE)
    layoutRootPath = EXT:webuser/Resources/Private/Backend/Layouts/
  }
  persistence {
    # cat=module.tx_webuser_bewebuser//a; type=string; label=Default storage PID
    storagePid =
  }
}
