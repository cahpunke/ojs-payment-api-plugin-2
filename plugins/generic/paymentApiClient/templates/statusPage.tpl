<div class="pkp_page_content">
    <h2>{translate key="plugins.generic.paymentApiClient.statusPage.title"}</h2>
    <p>{translate key="plugins.generic.paymentApiClient.statusPage.description"}</p>

    <table class="pkp_table">
        <thead>
            <tr>
                <th>{translate key="plugins.generic.paymentApiClient.statusPage.submissionId"}</th>
                <th>{translate key="plugins.generic.paymentApiClient.statusPage.paymentStatus"}</th>
                <th>{translate key="plugins.generic.paymentApiClient.statusPage.amount"}</th>
                <th>{translate key="plugins.generic.paymentApiClient.statusPage.date"}</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$paymentStatus item=status}
                <tr>
                    <td>{$status.submissionId}</td>
                    <td>{$status.paymentStatus}</td>
                    <td>{$status.amount}</td>
                    <td>{$status.date}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
