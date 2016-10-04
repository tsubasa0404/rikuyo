<?php $this->set('title_for_layout', 'Advanced Search'); ?>
<?php $this->Html->css('libs/footable.core', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/select2', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-default', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-growl', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-bar', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-attached', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-other', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/ns-style-theme', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->css('libs/sweetalert', array('inline'=>false, 'block'=>'page-css'));?>
<?php $this->Html->addCrumb(__('Interview Profile'), '/interviews/profile/'.$prof['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Select Candidate'), '/interviews/select/'.$prof['Interview']['id']); ?>
<?php $this->Html->addCrumb(__('Advanced Search')); ?>
					<h1><?= __('Advanced Search Result') ?></h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="center-block text-left" style="margin-bottom: 15px">
						<?php echo $this->Html->link(
							'<i class="fa fa-long-arrow-left fa-lg"></i> '. __('Back to Previous Page'),
							array('action' => 'profile', $prof['Interview']['id']),
							array('escape' => false, 'class' => 'btn btn-default')
						) ?>
						</div>
				</div>
					<div class="col-lg-12 maxW700">
						<div class="main-box clearfix">
							<header class="main-box-header clearfix">
								<h2 class="pull-left"><?= __('Interview Requests') ?></h2>
							</header>
							<div class="main-box-body clearfix">
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th><span><?= __('Company') ?></span></th>
												<th><span><?= __('Job') ?></span></th>
												<th><span><?= __('Adoption Number') ?></span></th>
												<th><span><?= __('Sex') ?></span></th>
												<th><span><?= __('Age') ?></span></th>
												<th><span><?= __('Requests') ?></span></th>
												<th><span><?= __('Interview Date') ?></span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="td_first_block">
													<?php echo $this->Btn->switchLang($lang, $prof['Com']['company_jp'], $prof['Com']['company_en']) ?>
												</td>
												<td>
													<?php echo $this->Btn->switchLang($lang, $prof['Job']['job_jp'], $prof['Job']['job_en']) ?>
												</td>
												<td>
													<?php echo $prof['Interview']['adoption_num']; ?>
												</td>
												<td>
													<?= __($prof['Interview']['sex']); ?>
												</td>
												<td>
													<?= $prof['Interview']['age'] ?>
												</td>
												<td>
													<?= $prof['Interview']['request'] ?>
												</td>
												<td>
													<?= $prof['Interview']['interview_date'] ?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Advanced Search Trainees -->
      <div class="row">
        <div class="col-lg-12">
          <div class="main-box clearfix">
            <header class="main-box-header clearfix">
              <h2 class="pull-left"><?= __('Advanced Search Trainees') ?></h2>
            </header>

            <div class="main-box-body clearfix">
              <?php echo $this->Form->create('Interview', array(
                'action' => 'advanced_search/'.$prof['Interview']['id'],
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
                          'max' => 100,
                          'value' => $this->request->data['Interview']['age1']
                        )) ?> To
                        <?php echo $this->Form->input('age2', array(
                          'label' => false,
                          'class' => 'form-control maxW70',
                          'type' => 'number',
                          'step' => 1,
                          'min' => 10,
                          'max' => 100,
                          'value' => $this->request->data['Interview']['age2']
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
                        'max' => 250,
                        'value' => $this->request->data['Interview']['height1']
                      )) ?> To
                      <?php echo $this->Form->input('height2', array(
                        'label' => false,
                        'class' => 'form-control maxW70',
                        'type' => 'number',
                        'step' => 1,
                        'min' => 100,
                        'max' => 250,
                        'value' => $this->request->data['Interview']['height2']
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
                        'max' => 200,
                        'value' => $this->request->data['Interview']['weight1']
                      )) ?> To
                      <?php echo $this->Form->input('weight2', array(
                        'label' => false,
                        'class' => 'form-control maxW70',
                        'type' => 'number',
                        'step' => 1,
                        'min' => 20,
                        'max' => 200,
                        'value' => $this->request->data['Interview']['weight2']
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
                        <input type="checkbox" name="data[Interview][marriage][]" class="" id="marriage_married" value="married"
                        <?php if(!empty($this->request->data['Interview']['marriage'])){
                        	if(in_array("married", $this->request->data['Interview']['marriage'])){echo 'checked';};} ?>/>
                        <label for="marriage_married"><?= __('Married') ?></label>
                      </div>
                      <div class="checkbox-nice pull-left mL5">
                        <input type="checkbox" name="data[Interview][marriage][]" class="" id="marriage_single" value="single" <?php if(!empty($this->request->data['Interview']['marriage'])){if(in_array("single", $this->request->data['Interview']['marriage'])){echo 'checked';};} ?>/>
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
                        <input type="checkbox" name="data[Interview][english]" class="" id="english" value="1" <?php if($this->request->data['Interview']['english'] == 1){echo 'checked';} ?>/>
                        <label for="english"><?= __('English') ?></label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                  <label><?= __('Latest Academic History'); ?></label>
                  <div class="form-inline">
                    <div class="form-group">
                      <input type="hidden" name="data[Interview][academic_history]" class="" id="" value=""/>

                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_1" value="1" <?php if(!empty($this->request->data['Interview']['academic_history'])){if(in_array("1", $this->request->data['Interview']['academic_history'])){echo 'checked';};} ?>/>
                        <label for="latest_academic_history_1"><?= __('Elementary School') ?></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_2" value="2" <?php if(!empty($this->request->data['Interview']['academic_history'])){if(in_array("2", $this->request->data['Interview']['academic_history'])){echo 'checked';};} ?>/>
                        <label for="latest_academic_history_2"><?= __('Secondary School') ?></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_3" value="3" <?php if(!empty($this->request->data['Interview']['academic_history'])){if(in_array("3", $this->request->data['Interview']['academic_history'])){echo 'checked';};} ?>/>
                        <label for="latest_academic_history_3"><?= __('High School') ?></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="checkbox-nice pull-left mR5">
                        <input type="checkbox" name="data[Interview][academic_history][]" class="" id="latest_academic_history_4" value="4" <?php if(!empty($this->request->data['Interview']['academic_history'])){if(in_array("4", $this->request->data['Interview']['academic_history'])){echo 'checked';};} ?>/>
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
                    'div' => false,
                    'selected' => $selected_work_experience
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
                    'div' => false,
                    'selected' => $selected_job_expectation
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
                        <input type="checkbox" name="data[Interview][interview_status][]" class="" id="interview_status_0" value="0"  <?php if(!empty($this->request->data['Interview']['interview_status'])){if(in_array("0", $this->request->data['Interview']['interview_status'])){echo 'checked';};} ?>/>
                        <label for="interview_status_0"><?= __('Not Yet') ?></label>
                      </div>
                      <div class="checkbox-nice pull-left mL5">
                        <input type="checkbox" name="data[Interview][interview_status][]" class="" id="interview_status_2" value="2" <?php if(!empty($this->request->data['Interview']['interview_status'])){if(in_array("2", $this->request->data['Interview']['interview_status'])){echo 'checked';};} ?>/>
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


			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="main-box clearfix">
						<header class="main-box-header clearfix">
							<h2 class="pull-left"><?= __('Trainees List') ?></h2>
							<div class="filter-block pull-right">
								<p><?= __('The count of search results') ?>: <?php echo count($advanced_search_result) ?></p>
							</div>
						</header>
						<div class="main-box-body clearfix">
							<div class="table-responsive">

								<table id="select_trainee_table" class="table data select_trainee table-hover toggle-circle-filled table-striped footable footable_trainees_list" data-page-size="10" data-filter="#filter1">
									<thead>
										<tr>
											<th class="control_no"><?= __('Trainee ID') ?></th>
											<th class="name"><?= __('Name') ?></th>
											<th class="sex"><?= __('Sex') ?></th>
											<th class="age"><?= __('Age') ?></th>
											<th data-hide="all" class="height"><?= __('Height') ?></th>
											<th data-hide="all" class="weight"><?= __('Weight') ?></th>
											<th data-hide="all" class="marriage"><?= __('Marriage') ?></th>
											<th data-hide="all" class="language"><?= __('Language') ?></th>
											<th data-hide="all" class="latest_academic_history"><?= __('Latest Academic History') ?></th>
											<th class="work_experience"><?= __('work experience') ?></th>
											<th class="job_expectation"><?= __('job expectation') ?></th>
											<th data-hide="all" class="interview_status"><?= __('interview status') ?></th>
										</tr>
									</thead>
									<tbody class="select_trainee_table_tbody">
										<?php foreach ($advanced_search_result as $trainee) : ?>
											<?php if($trainee['AdvancedSearchCandidate']['interview_id'] == $prof['Interview']['id'] ||
													$trainee['AdvancedSearchCandidate']['interview_result_id'] == 2){
												} else { ;?>
												<?php echo '<tr class="select_trainee_table_'.$trainee['Trainee']['id'].'">';?>
												<td>
													<div class="checkbox-nice" style="display: inline-flex;">
														<input type="checkbox" id="trainee_<?php echo $trainee['Trainee']['id'];?>" class="chk_select_trainee <?php echo $trainee['Trainee']['control_no']?>" name="trainee_id" value="" data-trainee-id="<?php echo $trainee['Trainee']['id']?>" data-trainee-control-no="<?php echo $trainee['Trainee']['control_no']?>" data-interview-candidate-id="">
														<label for="trainee_<?php echo $trainee['Trainee']['id']?>">
															<?php echo $trainee['Trainee']['control_no']?>
														</label>
													</div>
												</td>
												<!-- <td>
													<?php //if($trainee['TraineeProfileImage']['trainee_id']){
														//echo $this->Html->image('trainee_profile_images/thumb/'.$trainee['//TraineeProfileImage']['img_file_name'], array('width' => '60px', '//height' => '60px'));
														//} else {
														//	echo $this->Html->image('trainee_profile_images/thumb/default.png', //array('width' => '60px', 'height' => '60px'));
														//};?>
												</td> -->
												<td>
													<?php echo $this->Html->link(
														$trainee['Trainee']['given_name_en']." " .$trainee['Trainee']['family_name_en'],
														array('controller' => 'trainees', 'action' => 'profile', $trainee['Trainee']['id']),
														array('escape' => false, 'target' => '_blank')
													);?>
												</td>
												<td><?php echo __($trainee['Trainee']['sex'])?></td>
												<td class="num">
													<?php echo $this->Btn->calcAge($trainee['Trainee']['birthday'])?>
												</td>
												<td><?php echo $trainee['Trainee']['height']; ?></td>
												<td><?php echo $trainee['Trainee']['weight']; ?></td>
												<td><?php echo __($trainee['Trainee']['married']); ?></td>
												<td>
													<?php if($trainee['Trainee']['english'] == 1){
														echo __('English') . "<br>";
													} ?>
													<?php if($trainee['Trainee']['lang_others_en']){
														echo $trainee['Trainee']['lang_others_en'];
													} ?>
												</td>
												<td>
												<?php switch ($trainee['Trainee']['latest_academic_history']) {
													case 1:
														echo __('Elementary School');
														break;
													case 2:
														echo __('Secondary School');
														break;
													case 3:
														echo __('High School');
														break;
													case 4:
														echo __('University');
														break;
													default:
														echo "";
														break;
												}?>

												</td>
												<td>
													<?php if($trainee['AdvancedSearchWorkExperience1']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchWorkExperience1']['job_en']."<br>";
														} else {
															echo $trainee['AdvancedSearchWorkExperience1']['job_jp'];
														};
													} ?>
													<?php if($trainee['AdvancedSearchWorkExperience2']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchWorkExperience2']['job_en']."<br>";
														}else{
															echo $trainee['AdvancedSearchWorkExperience2']['job_jp'];
														};
													} ?>
													<?php if($trainee['AdvancedSearchWorkExperience3']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchWorkExperience3']['job_en']."<br>";
														}else{
															echo $trainee['AdvancedSearchWorkExperience3']['job_jp'];
														};
													} ?>
													<?php if($trainee['AdvancedSearchWorkExperience4']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchWorkExperience4']['job_en']."<br>";
														}else{
															echo $trainee['AdvancedSearchWorkExperience4']['job_jp'];
														};
													} ?>
													<?php if($trainee['AdvancedSearchWorkExperience5']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchWorkExperience5']['job_en'];
														}else{
															echo $trainee['AdvancedSearchWorkExperience5']['job_jp'];
														};
													} ?>

												</td>
												<td>
													<?php if($trainee['AdvancedSearchJobExpectation1']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchJobExpectation1']['job_en']."<br>";
														} else {
															echo $trainee['AdvancedSearchJobExpectation1']['job_jp'];
														};
													} ?>
													<?php if($trainee['AdvancedSearchJobExpectation2']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchJobExpectation2']['job_en']."<br>";
														} else {
															echo $trainee['AdvancedSearchJobExpectation2']['job_jp'];
														};
													} ?>
													<?php if($trainee['AdvancedSearchJobExpectation3']['job_en']){
														if($lang == 'en'){
															echo $trainee['AdvancedSearchJobExpectation3']['job_en'];
														} else {
															echo $trainee['AdvancedSearchJobExpectation3']['job_jp'];
														};
													} ?>
												</td>
												<td><?php if($trainee['Trainee']['student_status_id']==0){
														echo __('Not Yet');
													}else{
														echo __('Cancel');
													}; ?></td>
											</tr>



											<?php	} ;?>

										<?php endforeach; ?>
									</tbody>
									<tfoot class="hide-if-no-paging">
										<tr>
											<td colspan="6" class="text-center">
												<ul class="pagination">
												</ul>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="center-block text-left" style="margin-bottom: 15px">
				<?php echo $this->Html->link(
					'<i class="fa fa-long-arrow-left fa-lg"></i> '. __('Back to Previous Page'),
					array('action' => 'select', $prof['Interview']['id']),
					array('escape' => false, 'class' => 'btn btn-default')
				) ?>
				<?php echo $this->Form->create('InterviewCandidate', array(
					'action' => 'addAjax',
					'class' => 'hide select_candidate_form')); ?>
				<?php echo $this->Form->end(); ?>
				<?php echo $this->Form->create('InterviewCandidate', array(
					'action' => 'deleteAjax',
					'class' => 'hide delete_candidate_form')); ?>
				<?php echo $this->Form->end(); ?>



	<?php
		echo $this->Html->script('footable', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('footable.sort.js', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('footable.paginate', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('footable.filter', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('jquery.ex-table-filter', array('inline' => false, 'block' => 'modal-js'));
		echo $this->Html->script('select2.min', array('inline' => false, 'block' => 'page-js'));
		echo $this->Html->script('sweetalert.min', array('inline' => false, 'block' => 'page-js'));
	 ?>

	<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'inline-script')); ?>
		<!-- this page specific scripts -->
		$(function(){
			$('.md-modal').each(function(){
				$(this).remove();
			});
			$('.sel_job').select2();
			$('.language_switch_btn').hide();
		});

		//学生検索
		$(function(){
			//$('table.data').exTableFilter({
			//	filters : {
			//		0:'input.filter_control_no',
			//		1:'input.filter_name',
			//		2:'input.filter_sex',
			//		3: {
			//			element : 'input.filter_age_min',
			//			onFiltering : function(api){
			//				return api.getCurrentCellNum() >= api.getCurrentFilterNum();
			//			}
			//		},
			//		4:'input.filter_image',
			//		5:'input.filter_language',
			//		6:'input.filter_skill',
			//		7:'input.filter_hand',
			//	}
			//});
		});
		$(function () {
		    $('table.footable').footable().bind('footable_filtering', function(e){
		      var selected = $(this).prev('p').find('.filter-status').find(':selected').text();
		      if (selected && selected.length > 0){
		        e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
		        e.clear = !e.filter;
		      }
		    });

		    $('.clear-filter').click(function (e) {
		      e.preventDefault();
		      var $parent = $(this).closest('p');
		      $parent.find('.filter-status').val('');
		      if ($parent.find('#filter1').length > 0) {
		        $('table.footable_trainees_list').trigger('footable_clear_filter');
		      } else {
		        $('table.footable_candidates_list').trigger('footable_clear_filter');
		      }
		    });

		    $('.filter-status').change(function (e) {
		      e.preventDefault();
		      var $parent = $(this).closest('p');
		      if ($parent.find('#filter1').length > 0) {
		        $('table.footable_trainees_list').trigger('footable_filter', {filter: $parent.find('#filter1').val()});
		      } else {
		        $('table.footable_candidates_list').trigger('footable_filter', {filter: $parent.find('#filter2').val()});
		      }
		    });
		  });

		$(document).ready(function($) {
			//もしTrainee Listのchk_select_traineeがクリックされたら、
			$('#select_trainee_table').on('click', '.chk_select_trainee', function(){
				var this_obj = $(this);
				console.log(this_obj);
				//Swalを表示して、YesかCancelを選択。
				swal({
					title: "<?= __('Do you register this trainee as Candidate?') ?>",
					text: "",
					type: "info",
					showCancelButton: true,
					cancelButtonText: "<?= __('Cancel') ?>",
					confirmButtonColor: "#03a9f4",
					confirmButtonText: "<?= __('Yes') ?>",
					closeOnConfirm: false
					},
				function(isConfirm){
				//もしYesだったら、
						if(isConfirm){
							var id;
							var interview_id = <?php echo $prof['Interview']['id'];?>;
							var trainee_id = this_obj.attr('data-trainee-id');
							var $this_tr = $('.select_trainee_table_'+trainee_id);
							var interview_result_id = 0;
							var note = "";
							var url = $('.select_candidate_form').attr('action');
							//Ajaxで、InterviewCandidateに、
							//interview_id, trainee_id, interview_result_id=0, note=""を投げる。
							$.ajax({
								url: url,
								type: 'POST',
								dataType: 'json',
								data: {
									id:id,
									interview_id: interview_id,
									trainee_id: trainee_id,
									interview_result_id: interview_result_id,
									note: note
								},
								//Ajax処理が通ったら、
								success: function(rs){

								//TrのコピーをCandidates ListにPrependTo()
								$this_tr.clone().prependTo('tbody.selected_trainee_table_tbody')
									.removeClass('select_trainee_table_'+trainee_id)
									.addClass('selected_trainee_table_'+trainee_id)
									.find('.chk_select_trainee')
									.removeClass('chk_select_trainee')
									.addClass('chk_selected_trainee')
									.attr('data-interview-candidate-id', rs);
								$this_tr.hide();
								swal("<?= __('OK') ?>", "", "success");

								this_obj.remove(); //※ここでクリック時のthisを破棄。
								},
								error: function(exception){
									alert('Exception:'+exception);
									swal({
										title: "Oops...",
										text: "Please try it again.",
										type:"error",
										confirmButtonText:"OK"
									});
								}
							});
						}

				//もしCancelだったら
				else {
				//チェックボックスをオフにして終了
							this_obj.prop('checked', false);
						}
					}
				);//swal
			});
		});

		$(document).ready(function($) {
			//もしCandidates Listのチェックボックスがクリックされたら
			$('.selected_trainee_table_tbody').on('click', '.chk_selected_trainee', function(){
				var selected_trainee_obj = $(this);
				console.log(selected_trainee_obj);
				//Swalを表示して、
				swal({
								title: "<?= __('Do you remove this trainee from Candidate List?') ?>",
								text: "",
								type: "info",
								showCancelButton: true,
								cancelButtonText: "<?= __('Cancel') ?>",
								confirmButtonColor: "#DD6B55",
								confirmButtonText: "<?= __('Yes') ?>",
								closeOnConfirm: false
							},
					function(isConfirm){

				//Yesがクリックされたら
						if(isConfirm){
							//checkbox内のinterview_candidatesのidを取得
							var id;
              var interview_id          = <?php echo $prof['Interview']['id'];?>;
              var trainee_id            = selected_trainee_obj.attr('data-trainee-id');
              var interview_candidate_id= selected_trainee_obj.attr('data-interview-candidate-id');
              var $this_tr              = $('.selected_trainee_table_'+trainee_id);
              var selected_url_delete = $('.delete_candidate_form').attr('action');

							//Ajaxで削除処理
							$.ajax({
								url: selected_url_delete,
								type: 'POST',
								dataType: 'json',
								data: {
									id : interview_candidate_id
								},
							//削除処理が上手くいったら
							success:function(){
								//TrのコピーをTrainees ListにPrependTo()
								$this_tr.clone().prependTo('tbody.select_trainee_table_tbody')
									.removeClass('selected_trainee_table_'+trainee_id)
									.addClass('select_trainee_table_'+trainee_id)
									.find('.chk_selected_trainee')
									.removeClass('chk_selected_trainee')
									.addClass('chk_select_trainee')
									.attr('data-interview-candidate-id', "");
								$this_tr.hide();
								swal("<?= __('Removed') ?>", "", "success");

								},
						//エラーが発生した場合
							error: function(exception){
								}
							});
						}　
					//Cancelがクリックされたら
						else {
							selected_trainee_obj.prop('checked', true);
						}
					});
				});//swal
		});




	<?php $this->Html->scriptEnd(); ?>