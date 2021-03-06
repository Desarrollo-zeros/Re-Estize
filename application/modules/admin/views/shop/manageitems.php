<?php if (isset($_POST['button_deleteItem'])) {
    $this->admin_model->delShopItm($_POST['button_deleteItem']);
} ?>

    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-medium uk-grid-match" data-uk-grid>
                <div class="uk-width-1-1@l uk-width-1-1@xl">
                    <div class="uk-card uk-card-default uk-card-small">
                        <div class="uk-card-header uk-card-secondary">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4 class="uk-margin-remove-bottom"><span data-uk-icon="icon: list"></span> <?= $this->lang->line('admin_manage_items'); ?></h4></div>
                                <div class="uk-width-expand uk-text-right">
                                    <a href="" class="uk-icon-link uk-margin-small-right" data-uk-icon="icon: pencil" uk-toggle="target: #newItem"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <table class="uk-table uk-table-justify uk-table-divider">
                                <thead>
                                    <tr>
                                        <th><?= $this->lang->line('column_id'); ?></th>
                                        <th><?= $this->lang->line('column_name'); ?></th>
                                        <th><?= $this->lang->line('store_item_price'); ?> DP</th>
                                        <th><?= $this->lang->line('store_item_price'); ?> VP</th>
                                        <th class="uk-text-center"><?= $this->lang->line('column_action'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($this->admin_model->getShopAll()->result() as $shopall) { ?>
                                        <tr>
                                            <td><?= $shopall->itemid ?></td>
                                            <td><?= $shopall->name ?></td>
                                            <td><?= $shopall->price_dp ?></td>
                                            <td><?= $shopall->price_vp ?></td>
                                            <td class="uk-text-center" uk-margin>
                                                <a href="<?= base_url(); ?>admin/edititems/<?= $shopall->id ?>" class="uk-button uk-button-secondary"><i class="far fa-edit"></i></a>
                                                <span class="" style="display:inline-block; width: 5px;"></span>
                                                <form action="" method="post" accept-charset="utf-8" style="display: inline;">
                                                    <button class="uk-button uk-button-danger" name="button_deleteItem" value="<?= $shopall->id ?>" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
