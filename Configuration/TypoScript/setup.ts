
plugin.tx_webuser_fewebuser {
  view {
    templateRootPaths.0 = EXT:webuser/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_webuser_fewebuser.view.templateRootPath}
    partialRootPaths.0 = EXT:webuser/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_webuser_fewebuser.view.partialRootPath}
    layoutRootPaths.0 = EXT:webuser/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_webuser_fewebuser.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_webuser_fewebuser.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_webuser._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-webuser table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-webuser table th {
        font-weight:bold;
    }

    .tx-webuser table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

# Module configuration
module.tx_webuser_web_webuserbewebuser {
  persistence {
    storagePid = {$module.tx_webuser_bewebuser.persistence.storagePid}
  }
  view {
    templateRootPaths.0 = EXT:webuser/Resources/Private/Backend/Templates/
    templateRootPaths.1 = {$module.tx_webuser_bewebuser.view.templateRootPath}
    partialRootPaths.0 = EXT:webuser/Resources/Private/Backend/Partials/
    partialRootPaths.1 = {$module.tx_webuser_bewebuser.view.partialRootPath}
    layoutRootPaths.0 = EXT:webuser/Resources/Private/Backend/Layouts/
    layoutRootPaths.1 = {$module.tx_webuser_bewebuser.view.layoutRootPath}
  }
}
