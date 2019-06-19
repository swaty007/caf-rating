<!--<pre>--><?php //var_dump($data); ?><!--</pre>-->
<div class="row">
    <div class="col-md-12">
        <h2 class="sub-title text-center african">
            <span class="color-orange">Rating</span> of participants
        </h2>

            <table id="table_pm" class="table table-pm">
                <thead>
                <tr>
<!--                    <th>id</th>-->
                    <th>Place</th>
<!--                    <th>Type</th>-->
                    <th>Account number</th>
                    <th>Name</th>
                    <th>Points</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $key => $types):?>
                    <?php foreach ($types as $item):?>
                        <tr>
<!--                            <td>--><?//=$item->id;?><!--</td>-->
                            <td><?=$item->place;?></td>
<!--                            <td>--><?//=$key;?><!--</td>-->
                            <td><?=$item->account_number;?></td>
                            <td><?=$item->first_name;?></td>
                            <td><?=$item->point;?></td>
                        </tr>
                    <?php endforeach;?>
                <?php endforeach;?>
                </tbody>
            </table>


    </div>
</div>



