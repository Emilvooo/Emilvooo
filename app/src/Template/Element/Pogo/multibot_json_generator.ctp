<div class="card-text">
    <p><strong>Example:</strong> <br> user:pass <br> user:pass <br> user:pass</p>
</div>
<?php
    echo $this->Form->create(null);
    echo $this->Form->input('accounts', ['type' => 'textarea', 'label' => false]);
?>
<div class="form-check">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="provider" id="provider-ptc" value="ptc" checked>
        Ptc
    </label>
</div>
<div class="form-check">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="provider" id="provider-google" value="google">
        Google
    </label>
</div>
<?php
    echo $this->Form->button('Generate');
    echo $this->Form->end();

    if (!empty($accounts)) {
        echo '<hr><pre class="pre-scrollable mt-3"><span>'.$accounts.'</span></pre>';
    }
?>