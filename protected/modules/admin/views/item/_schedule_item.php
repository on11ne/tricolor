<table class="appendo-gii" id="<?php echo $id ?>">
    <caption>
        <h4>Показы</h4>
        <em>Please enter the keywords in the order that you would like them to appear. To add a keyword, click 'Add Keyword'
        </em>
        <div class="clear">To remove a keyword delete the text in the box, if you put a comma in your keyphrase it will count as more than one keyword.</div>

    </caption>
    <tbody>
    <tr>
        <th>Показ</th>
    </tr>

    <?php if ($model->schedules == null): ?>
        <tr>
            <td><?php echo CHtml::textField('schedules[]','',array('size'=>40)); ?></td>
        </tr>
    <?php else: ?>
        <?php foreach($model->schedules as $schedule): ?>
            <tr>
                <td><?php echo CHtml::textField('schedules[]', $schedule->id, array('size'=>30)); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>