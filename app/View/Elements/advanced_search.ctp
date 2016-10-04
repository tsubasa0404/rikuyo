<!-- Advanced Search Trainees -->
      <div class="row">
        <div class="col-lg-12">
          <div class="main-box clearfix">
            <header class="main-box-header clearfix">
              <h2 class="pull-left"><?= __('Advanced Search Trainees') ?></h2>
            </header>

            <div class="main-box-body clearfix">
              <?php echo $this->Form->create('Interview', array(
                'action' => 'advanced_search',
                'class' => 'form_advanced_search',
                'inputDefaults' => array(
                  'div' => false,
                  )
              )); ?>
              <div class="row mB15">

                <div class="col-lg-3 col-md-3 col-sm-3">
                  <label><?= __('Age') ?></label>
                  <div class="form-inline">
                    <div class="form-group">
                        <?php echo $this->Form->input('age1', array(
                          'label' => false,
                          'class' => 'form-control maxW70',
                          'type' => 'number',
                          'step' => 1,
                          'min' => 10,
                          'max' => 100
                        )) ?> To
                        <?php echo $this->Form->input('age2', array(
                          'label' => false,
                          'class' => 'form-control maxW70',
                          'type' => 'number',
                          'step' => 1,
                          'min' => 10,
                          'max' => 100
                        )) ?>
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <label><?= __('Height') ?>(cm)</label>
                  <div class="form-inline">
                    <div class="form-group">
                      <?php echo $this->Form->input('height1', array(
                        'label' => false,
                        'class' => 'form-control maxW70',
                        'type' => 'number',
                        'step' => 1,
                        'min' => 100,
                        'max' => 250
                      )) ?> To
                      <?php echo $this->Form->input('height2', array(
                        'label' => false,
                        'class' => 'form-control maxW70',
                        'type' => 'number',
                        'step' => 1,
                        'min' => 100,
                        'max' => 250
                      )) ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <label><?= __('Weight') ?>(kg)</label>
                  <div class="form-inline">
                    <div class="form-group">
                      <?php echo $this->Form->input('weight1', array(
                        'label' => false,
                        'class' => 'form-control maxW70',
                        'type' => 'number',
                        'step' => 1,
                        'min' => 20,
                        'max' => 200
                      )) ?> To
                      <?php echo $this->Form->input('weight2', array(
                        'label' => false,
                        'class' => 'form-control maxW70',
                        'type' => 'number',
                        'step' => 1,
                        'min' => 20,
                        'max' => 200
                      )) ?>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row mB15">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <label><?= __('Marriage') ?></label>
                  <div class="form-inline">
                    <div class="form-group">
                      <input type="hidden" name="data[Interview][marriage]" class="" id="" value=""/>
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][marriage][]" class="" id="marriage_married" value="married"/>
                        <label for="marriage_married"><?= __('Married') ?></label>
                      </div>
                      <div class="checkbox-nice pull-left mL5">
                        <input type="checkbox" name="data[Interview][marriage][]" class="" id="marriage_single" value="single"/>
                        <label for="marriage_single"><?= __('Single') ?></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <label><?= __('Language') ?></label>
                  <div class="form-inline">
                    <div class="form-group">
                        <div class="checkbox-nice pull-left mR5">
                        <input type="hidden" name="data[Interview][english]" class="" id="" value="0"/>
                        <input type="checkbox" name="data[Interview][english]" class="" id="english" value="1"/>
                        <label for="english"><?= __('English') ?></label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <label><?= __('Latest Academic History') ?></label>
                  <div class="form-inline">
                    <div class="form-group">
                      <input type="hidden" name="data[Interview][academic_history]" class="" id="" value=""/>

                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_1" value="1"/>
                        <label for="latest_academic_history_1"><?php echo __('Elementary School') ?></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_2" value="2"/>
                        <label for="latest_academic_history_2"><?= __('Secondary School') ?></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_3" value="3"/>
                        <label for="latest_academic_history_3"><?= __('High School') ?></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_4" value="4"/>
                        <label for="latest_academic_history_4"><?= __('University') ?></label>
                      </div>
                    </div>
                  </div>
                </div>


                <!-- <div class="col-lg-3 col-md-3 col-sm-3">
                  <label><?//= __('Gender') ?></label>
                  <div class="form-inline">
                    <div class="form-group">
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" class="" id="gender_male" value="male"/>
                        <label for="gender_male"><?//= __('Male') ?></label>
                      </div>
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" class="" id="gender_female" value="female"/>
                        <label for="gender_female"><?//= __('Female') ?></label>
                      </div>
                    </div>
                  </div>
                </div> -->


              </div>

              <div class="row mB15">


                <div class="col-lg-5 col-md-5 col-sm-5">
                  <label class="control-label"><?= __('Work Experiences') ?></label>
                  <?php echo $this->Form->input('trainee_job', array(
                    'label' => false,
                    'options' => $option_jobs,
                    'multiple' => true,
                    'class' => "form-control sel_job work_experiences",
                    'style' => array("width:100%"),
                    'div' => false
                  )) ?>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                  <label class="control-label"><?= __('Job Expectation') ?></label>
                  <?php echo $this->Form->input('job_expectation', array(
                    'label' => false,
                    'options' => $option_jobs,
                    'multiple' => true,
                    'class' => "form-control sel_job job_expectation",
                    'style' => array("width:100%"),
                    'div' => false
                  )) ?>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <label><?= __('Interview Status') ?></label>
                  <div class="form-inline">
                    <div class="form-group">
                      <input type="hidden" name="data[Interview][interview_status]" class="" id="" value=""/>

                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][interview_status][]" class="" id="interview_status_0" value="0"/>
                        <label for="interview_status_0"><?= __('Not Yet') ?></label>
                      </div>
                      <div class="checkbox-nice pull-left mL5">
                        <input type="checkbox" name="data[Interview][interview_status][]" class="" id="interview_status_2" value="2"/>
                        <label for="interview_status_2"><?= __('Cancel') ?></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                  <button type="submit" class="btn btn-default pull-left advanced_search_btn" style="margin-top:15px;"><span class=" fa fa-search"></span> <?= __('Search') ?></button>
                </div>
              </div>
              <?php echo $this->Form->end(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- //Advanced Search Trainees -->