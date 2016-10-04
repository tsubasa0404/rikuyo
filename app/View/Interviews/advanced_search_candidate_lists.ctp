// advanced_search.ctp
// Candidates(選択された候補者)一覧
// 求められてないので除く。


        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="main-box clearfix">
            <header class="main-box-header clearfix">
              <h2 class="pull-left"><?= __('Candidates List') ?></h2>
            </header>
            <div class="main-box-body clearfix">
              <div class="table-responsive">
                <table id="selected_trainee_table" class="table table-hover footable table-striped footable_candidates_list" data-filter="#filter2">
                  <thead>
                    <tr>
                      <th class=""><?= __('Trainee ID') ?></th>
                      <th class=""><?= __('Name') ?></th>
                      <th class=""><?= __('Sex') ?></th>
                      <th class=""><?= __('Age') ?></th>
                      <th class=""></th>
                    </tr>
                  </thead>
                  <tbody class="selected_trainee_table_tbody">
                    <?php foreach ($candidates as $can) : ?>
                      <tr class="selected_trainee_table_<?php echo $can['CandidateTrainee']['id'];?>">
                        <td>
                          <div class="checkbox-nice">
                            <input type="checkbox" id="selected_trainee_<?php echo $can['CandidateTrainee']['id'];?>" class="chk_selected_trainee <?php echo $can['CandidateTrainee']['control_no'];?>" value="<?php echo $can['CandidateTrainee']['id'];?>" data-trainee-id="<?php echo $can['CandidateTrainee']['id'];?>" data-trainee-control-no="<?php echo $can['CandidateTrainee']['control_no'];?>" checked="" data-interview-candidate-id="<?php echo $can['InterviewCandidate']['id'];?>">
                            <label for="selected_trainee_<?php echo $can['CandidateTrainee']['id'];?>">
                              <?php echo $can['CandidateTrainee']['control_no'];?>
                            </label>
                          </div>
                        </td>
                        <td>
                          <?php echo $this->Html->link($can['CandidateTrainee']['given_name_en']." " .$can['CandidateTrainee']['family_name_en'],
                            array('controller' => 'trainees', 'action' => 'profile', $can['CandidateTrainee']['id']),
                            array('escape' => false, 'target' => '_blank'));?>
                        </td>
                        <td><?php echo $can['CandidateTrainee']['sex'];?></td>
                        <td class="num"><?php echo $this->Btn->calcAge($can['CandidateTrainee']['birthday']);?></td>
                        <td>
                          <?php //if($can['ProfImg']['trainee_id']){
                          //  echo $this->Html->image('trainee_profile_images/thumb/'.$can['ProfImg'][//'img_file_name'], array('width' => '60px', 'height' => '60px'));
                          //  } else {
                          //    echo $this->Html->image('trainee_profile_images/thumb/default.png', //array('width' => '60px', 'height' => '60px'));
                          //};?>
                        </td>
                      </tr>
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
