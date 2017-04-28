<section class="section--pogo">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <h1>Pogo Botting Tools!</h1>
                <hr>
                <div class="card mt-3">
                    <div class="card-block">
                        <?php echo $this->Flash->render() ?>
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#multibot_json_generator" role="tab">MultiBot JSON Generator</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pogo_name_generator" role="tab">Pogo Name Generator</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="multibot_json_generator" role="tabpanel">
                                <?php echo $this->element('Pogo/multibot_json_generator'); ?>
                            </div>
                            <div class="tab-pane" id="pogo_name_generator" role="tabpanel">
                                <?php echo $this->element('Pogo/pogo_name_generator'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>