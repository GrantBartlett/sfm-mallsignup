<table class="container">
    <tr>
        <td>
            <table class="row">
                <tr>
                    <td>
                        <table class="twelve columns">
                            <repeater>
                            <layout label='New Headline'>
                                <tr>
                                    <td class="panel weekly welcome" style="background: #ffffff;">
                                        <div style="font-size: 19px;margin: 15px;text-align: center;">
                                            <h1>
                                                <singleline label="Title" repeatertitle='true' >Title of new headline</singleline>
                                            </h1>
                                            <multiline label="Description" >Description</multiline>
                                        </div>
                                    </td>
                                    <td class="expander"></td>
                                </tr>
                            </layout>
                            </repeater>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>