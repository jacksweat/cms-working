{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">



        <div class="col-md-12">



            <div class="panel panel-default">
                <div class="panel-body">

                    <a href="#" class="btn btn-primary" id="add_currency"><i class="fa fa-plus"></i> {$_L['New Currency']}</a>


                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="panel panel-default">

                <div class="panel-body">



                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="bold">{$_L['Currency Code']}</th>
                                <th class="bold">{$_L['Currency Symbol']}</th>
                                <th class="bold">{$_L['Base Conversion Rate']}</th>
                                <th class="text-center bold">{$_L['Manage']}</th>
                            </tr>
                            </thead>
                            <tbody>


                            {foreach $currencies as $currency}
                                <tr data-id="{$currency['id']}">
                                    <td> <a class="cedit" id="ae{$currency['id']}" href="#">{$currency['cname']}</a>
                                        {if $config['home_currency'] == $currency['cname']}
                                            <br>
                                            {$_L['Base Currency']}
                                        {/if}
                                    </td>
                                    <td>{$currency['symbol']}</td>
                                    <td>{$currency['rate']}</td>
                                    <td class="text-right">
                                        <a href="{$_url}" id="be{$currency['id']}" class="btn btn-inverse btn-xs cedit" data-toggle="tooltip" title="{$_L['Edit']}"><i class="fa fa-pencil"></i> </a>
                                        {if $config['home_currency'] != $currency['cname']}
                                            <a href="{$_url}settings/make_base_currency/{$currency['id']}/" class="btn btn-primary btn-xs" data-toggle="tooltip" title="{$_L['Make Base Currency']}"><i class="fa fa-star"></i> </a>
                                        {/if}

                                        <a href="#" class="btn btn-danger btn-xs cdelete" id="c{$currency['id']}" data-toggle="tooltip" title="{$_L['Delete']}"><i class="fa fa-trash"></i> </a>
                                    </td>

                                </tr>
                            {/foreach}






                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>



    </div>
{/block}
