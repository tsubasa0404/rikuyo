<div class="md-modal md-effect-8" id="modal-new-folder">
	<div class="md-content">
		<div class="modal-header">
			<button class="md-close close">&times;</button>
			<h4 class="modal-title"><?= __('Add New Folder') ?></h4>
		</div>
		<div class="modal-body">
			<?php echo $this->Form->create('DocFolder', array(
				'action' => 'add',
				'type' => 'post',
				'class' => 'form_new_folder'
			)) ?>
				<div class="form-group">
					<label for="folderJp"><?= __('Folder Name(Japanese)') ?></label>
					<?php echo $this->Form->input('folder_jp', array(
						'label' => false,
						'class' => 'form-control init',
						'placeholder' => __('Folder Name in Japanese'),
						'required' => true
					)) ?>
				</div>
				<div class="form-group">
					<label for="folderEn"><?= __('Folder Name(English)') ?></label>
					<?php echo $this->Form->input('folder_en', array(
						'label' => false,
						'class' => 'form-control  init',
						'placeholder' => __('Folder Name in English'),
						'required' => true
					)) ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close') ?></button>
					<button type="submit" class="btn btn-primary folder_form_btn"><?= __('Add') ?></button>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>

<div class="md-modal md-effect-8" id="modal-edit-folder">
	<div class="md-content">
		<div class="modal-header">
			<button class="md-close close">&times;</button>
			<h4 class="modal-title"><?= __('Edit/Delete Folder') ?></h4>
		</div>
		<div class="modal-body">
			<?php echo $this->Form->create('DocFolder', array(
				'action' => 'add',
				'type' => 'post',
				'class' => 'form_new_folder'
			)) ?>
				<div class="form-group chk-folder">
					<div class="radio">
						<input type="radio" name="edit_folder" id="editFolderRadio1" value="edit"  class="edit-folder" checked="">
						<label for="editFolderRadio1">
							<?= __('Change Folder Name') ?>
						</label>
					</div>
					<div class="radio">
						<input type="radio" name="edit_folder" id="editFolderRadios2" value="delete" class="delete-folder">
						<label for="editFolderRadios2">
							<?= __('Delete Folder') ?>
						</label>
					</div>
				</div>
				<div class="form-group form-group-select2">
					<label for="editFolder"><?= __('Select Edit Folder') ?></label>
					<?php echo $this->Form->input('id', array(
						'label' => false,
						'type' => 'select',
						'class' => 'form-control init',
						'options' => $option_folders,
						'empty' => true,
						'required' => true
					)) ?>
				</div>
				<div class="form-group renew-folder-name">
					<label for="inputFolderNameJp"><?= __('New Folder Name(Japanese)') ?></label>
					<?php echo $this->Form->input('folder_jp', array(
						'label' => false,
						'class' => 'form-control init',
						'required' => true
					)) ?>
				</div>
				<div class="form-group renew-folder-name">
					<label for="inputFolderNameEn"><?= __('New Folder Name(English)') ?></label>
					<?php echo $this->Form->input('folder_en', array(
						'label' => false,
						'class' => 'form-control init',
						'required' => true
					)) ?>
				</div>
				<?php echo $this->Form->hidden('flag', array('value' => 0, 'class' => 'delete-folder-flag')) ?>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close') ?></button>
					<button type="submit" class="btn btn-primary renew-folder-name"><?= __('Save') ?></button>
					<button type="submit" class="btn btn-danger pull-right delete-folder-btn hide"><?= __('Delete this Folder') ?></button>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>


<div class="md-modal md-effect-8" id="modal-new-sub-folder">
	<div class="md-content">
		<div class="modal-header">
			<button class="md-close close">&times;</button>
			<h4 class="modal-title"><?= __('New Sub Folder') ?></h4>
		</div>
		<div class="modal-body">
			<?php echo $this->Form->create('SubFolder', array(
				'action' => 'add',
				'type' => 'post',
				'class' => 'form_new_sub_folder'
			)) ?>
				<div class="form-group">
					<label for="subfolderJp"><?= __('Sub Folder Name(Japanese)') ?></label>
					<?php echo $this->Form->input('sub_folder_jp', array(
						'label' => false,
						'class' => 'form-control init',
						'placeholder' => __('Sub Folder Name in Japanese'),
						'required' => true
					)) ?>
				</div>
				<div class="form-group">
					<label for="subfolderEn"><?= __('SubFolder Name(English)') ?></label>
					<?php echo $this->Form->input('sub_folder_en', array(
						'label' => false,
						'class' => 'form-control init',
						'placeholder' => __('Sub Folder Name in English'),
						'required' => true
					)) ?>
				</div>
				<?php echo $this->Form->hidden('folder_id', array('class' => 'form_new_sub_folder_folder_id')) ?>
				<?php echo $this->Form->hidden('flag', array('value' => 0)) ?>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close') ?></button>
					<button type="submit" class="btn btn-primary sub_folder_form_btn"><?= __('Add') ?></button>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<div class="md-modal md-effect-8" id="modal-edit-sub-folder">
	<div class="md-content">
		<div class="modal-header">
			<button class="md-close close">&times;</button>
			<h4 class="modal-title"><?= __('Edit/Delete Sub Folder') ?></h4>
		</div>
		<div class="modal-body">
			<?php echo $this->Form->create('SubFolder', array(
				'action' => 'add',
				'type' => 'post',
				'class' => 'form_edit_sub_folder'
			)) ?>
				<div class="form-group chk-folder">
					<div class="radio">
						<input type="radio" name="editSubFolderRadio" id="editSubFolderRadio1" value="edit" checked="" class="edit-sub-folder">
						<label for="editSubFolderRadio1">
							<?= __('Edit Sub Folder') ?>
						</label>
					</div>
					<div class="radio">
						<input type="radio" name="editSubFolderRadio" id="editSubFolderRadios2" value="delete" class="delete-sub-folder">
						<label for="editSubFolderRadios2">
							<?= __('Delete Sub Folder') ?>
						</label>
					</div>
				</div>
				<div class="form-group renew-sub-folder-name">
					<label for="inputSubFolderNameJp"><?= __('New Sub Folder Name(Japanese)') ?></label>
					<?php echo $this->Form->input('sub_folder_jp', array(
						'label' => false,
						'class' => 'form-control init',
						'required' => true
					)) ?>
				</div>
				<div class="form-group renew-sub-folder-name">
					<label for="inputSubFolderNameEn"><?= __('New Sub Folder Name(English)') ?></label>
					<?php echo $this->Form->input('sub_folder_en', array(
						'label' => false,
						'class' => 'form-control init',
						'required' => true
					)) ?>
				</div>
				<?php echo $this->Form->hidden('id', array('class'=> 'edit_sub_folder_id')) ?>
				<?php echo $this->Form->hidden('flag', array('value' => 0, 'class' => 'delete-sub-folder-flag')) ?>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close') ?></button>
					<button type="submit" class="btn btn-primary renew-sub-folder-name"><?= __('Save') ?></button>
					<button type="submit" class="btn btn-danger pull-right delete-sub-folder-btn hide"><?= __('Delete this Sub Folder') ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="md-modal md-effect-8" id="modal-new-file">
	<div class="md-content">
		<div class="modal-header">
			<button class="md-close close">&times;</button>
			<h4 class="modal-title"><?= __('Add New Document') ?></h4>
		</div>
		<div class="modal-body">
			<?php echo $this->Form->create('DocName', array(
				'action' => 'add',
				'type' => 'post',
				'class' => 'form_new_file'
			)) ?>
				<div class="form-group">
					<label for="docNameJp"><?= __('Document Name(Japanese)') ?></label>
					<?php echo $this->Form->input('name_jp', array(
						'label' => false,
						'class' => 'form-control init',
						'placeholder' => __('Document Name in Japanese'),
						'required' => true
					)) ?>
				</div>
				<div class="form-group">
					<label for="docNameEn"><?= __('Document Name(English)') ?></label>
					<?php echo $this->Form->input('name_en', array(
						'label' => false,
						'class' => 'form-control init',
						'placeholder' => __('Document Name in English'),
						'required' => true
					)) ?>
				</div>
				<div class="form-group">
					<label><?= __('Languages') ?></label><br>
					<div class="checkbox-nice checkbox-inline">
						<input type="hidden" id="checkbox-inl-1_" name="data[DocName][lang_jpn]" value='0'>
						<input type="checkbox" id="checkbox-inl-1" name="data[DocName][lang_jpn]" value='1'>
						<label for="checkbox-inl-1">
						<?= __('Japanese') ?>
						</label>
					</div>
					<div class="checkbox-nice checkbox-inline">
						<input type="hidden" id="checkbox-inl-2_" name="data[DocName][lang_eng]" value="0">
						<input type="checkbox" id="checkbox-inl-2" name="data[DocName][lang_eng]" value="1">
						<label for="checkbox-inl-2">
						<?= __('English') ?>
						</label>
					</div>
					<div class="checkbox-nice checkbox-inline">
						<input type="hidden" id="checkbox-inl-3_" name="data[DocName][lang_khm]" value="0">
						<input type="checkbox" id="checkbox-inl-3" name="data[DocName][lang_khm]" value="1">
						<label for="checkbox-inl-3">
						<?= __('Khmer') ?>
						</label>
					</div>
				</div>
				<div class="form-group">
					<label><?= __('Note') ?></label>
					<?php echo $this->Form->input('note', array(
						'label' => false,
						'type' => 'text',
						'class' => 'form-control init',
					)) ?>
				</div>
				<?php echo $this->Form->hidden('folder_id', array('class' => 'form_new_file_folder_id')) ?>
				<?php echo $this->Form->hidden('sub_folder_id', array('class' => 'form_new_file_sub_folder_id')) ?>
				<?php echo $this->Form->hidden('flag', array('value' => 0)) ?>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close') ?></button>
					<button type="submit" class="btn btn-primary new_file_form_btn"><?= __('Add') ?></button>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<div class="md-modal md-effect-8" id="modal-upload-file">
	<div class="md-content">
		<div class="modal-header">
			<button class="md-close close">&times;</button>
			<h4 class="modal-title"><?= __('Document Upload') ?></h4>
		</div>
		<div class="modal-body">
			<?php
				echo $this->Form->create('DocTemplate', array(
				'action' => 'add',
				'type' => 'file'
				));?>

				<div class="form-group">
					<?php echo $this->Form->file('DocTemplate.img', array(
						'style'=>'cursor:pointer',
						'required' => true
					)); ?>
				</div>
				<div class="form-group form-group-select2">
					<label><?= __('Select Document Name') ?></label>
					<?php echo $this->Form->input('document_name_id', array(
						'label' => false,
						'type' => 'select',
						'class' => 'form-control init',
						'empty' => true,
						'required' => true
					)) ?>
				</div>
				<div class="form-group">
					<label><?= __('Select Document Language') ?></label>
					<div class="radio">
						<input type="radio" name="data[DocTemplate][lang]" id="optionsRadios1" value="jpn" checked="">
						<label for="optionsRadios1">
							<?= __('Japanese') ?>
						</label>
					</div>
					<div class="radio">
						<input type="radio" name="data[DocTemplate][lang]" id="optionsRadios2" value="eng" >
						<label for="optionsRadios2">
							<?= __('English') ?>
						</label>
					</div>
					<div class="radio">
						<input type="radio" name="data[DocTemplate][lang]" id="optionsRadios3" value="khm" >
						<label for="optionsRadios3">
							<?= __('Khmer') ?>
						</label>
					</div>
				</div>
				<?php echo $this->Form->hidden('id', array('class'=> 'upload-document-id')) ?>
				<?php echo $this->Form->hidden('folder_id', array('class'=> 'upload-document-folder-id')) ?>
				<?php echo $this->Form->hidden('sub_folder_id', array('class'=> 'upload-document-sub-folder-id')) ?>
				<?php echo $this->Form->hidden('flag', array('value' => 0, 'class' => 'delete-sub-folder-flag')) ?>
				<div class="form-group">
					<label for=""><?= __('Note')?></label>
					<?php echo $this->Form->input('note', array(
						'label' => false,
						'class' => 'form-control init',
					)) ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn_close" data-dismiss="modal"><?= __('Close') ?></button>
					<button  type="submit" class="btn btn-success pull-right"><i class="fa fa-lg fa-cloud-upload"></i> <?= __('Upload Document') ?></button>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>

