<form id="paymentApiSettingsForm" method="post" action="{url op="saveSettings"}">
    <div class="form-group">
        <label for="apiUrl">{translate key="plugins.generic.paymentApiClient.settings.apiUrl"}</label>
        <input type="text" id="apiUrl" name="apiUrl" class="form-control" value="{$apiUrl|escape}" required>
    </div>
    <div class="form-group">
        <label for="apiToken">{translate key="plugins.generic.paymentApiClient.settings.apiToken"}</label>
        <input type="text" id="apiToken" name="apiToken" class="form-control" value="{$apiToken|escape}" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{translate key="common.save"}</button>
    </div>
</form>
