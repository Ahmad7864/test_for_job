
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

  <div class="menu_section">
    <ul class="nav side-menu">

      <li><a href="#"> <i class="fa fa-list-alt" ></i> Reminders</a></li>
      <li><a href="<?php echo base_url();?>admin/buildings"> <i class="fa fa-th-large" ></i> Buildings</a></li>
      <!-- <li  class="<?php echo (($this->router->fetch_class() == 'categories') ?  'active' : ''); ?>"><a ><i class="fa fa-th-large" ></i> Buildings</a> -->
      <!-- <span class="active variant-border , fa fa-chevron-down"></span> -->
        <!-- <ul class="nav child_menu"  <?php echo (($this->router->fetch_class() == 'categories') ?  'style="display:block;"' : ''); ?>>
          <li><a href="<?php echo base_url();?>admin/category">  Shop Categories</a></li>
      
          <li><a href="<?php echo base_url();?>admin/session_category">  Session Categories</a></li>
        </ul> -->
      <!-- </li> -->

      <!-- <li><a href="<?php echo base_url();?>admin/feedback"> <i class="fa fa-comments" ></i> Tenants</a></li> -->

      <li class="<?php echo (($this->router->fetch_class() == 'subscriptions') ?  'active' : ''); ?>"><a ><i class="fa fa-tasks" ></i> Tenants <span class="active variant-border , fa fa-chevron-down"></span></a>
        <ul class="nav child_menu"  <?php echo (($this->router->fetch_class() == 'subscriptions') ?  'style="display:block;"' : ''); ?>>
          <li><a href="<?php echo base_url();?>admin/tenants_information"> <i class="fa fa-rocket" ></i>Tenants Information</a></li>
          <li><a href="<?php echo base_url();?>admin/tenants_location"> <i class="fa fa-percent" ></i>Tenants Location</a></li>
        </ul>
      </li>

      <li><a href="#"> <i class="fa fa-shield" ></i> Companies</a></li>

      <li class="<?php echo (($this->router->fetch_class() == 'categories') ?  'active' : ''); ?>"><a ><i class="fa fa-comments" ></i> Contacts <span class="active variant-border , fa fa-chevron-down"></span></a>
        <ul class="nav child_menu"  <?php echo (($this->router->fetch_class() == 'categories') ?  'style="display:block;"' : ''); ?>>
          <li><a href="<?php echo base_url();?>admin/vender_contacts">  Vender Contacts</a></li>
      
          <li><a href="<?php echo base_url();?>admin/tenant_contacts">  Tenant Contacts</a></li>
        </ul>
      </li>

      <!-- <li style="padding-top:60px"><a href="<?php echo base_url();?>admin/shop"> <i class="fa fa-bank" ></i> Add Lease</a></li> -->
      
      <li style="padding-top: 60px;" class="<?php echo (($this->router->fetch_class() == 'subscriptions') ?  'active' : ''); ?>"><a ><i class="fa fa-bank" ></i> Add Lease <span class="active variant-border , fa fa-chevron-down"></span></a>
        <ul class="nav child_menu"  <?php echo (($this->router->fetch_class() == 'subscriptions') ?  'style="display:block;"' : ''); ?>>
          <li><a href="<?php echo base_url();?>admin/lease_notes"> <i class="fa fa-rocket" ></i>Lease Notes</a></li>
          <li><a href="<?php echo base_url();?>admin/lease_terms"> <i class="fa fa-percent" ></i>Lease Terms</a></li>
        </ul>
      </li>

      <li class="<?php echo (($this->router->fetch_class() == 'snapshot') ?  'active' : ''); ?>"><a href="#"> <i class="fa fa-leaf" ></i> Notifications</a></li>

      <li class="<?php echo (($this->router->fetch_class() == 'single_survey') ?  'active' : ''); ?>"><a href="#"> <i class="fa fa-list-ul" ></i> Settings</a></li>

      <!-- <li><a href="<?php echo base_url();?>admin/tag"> <i class="fa fa-tags" ></i> Tags</a></li>

      <li><a href="<?php echo base_url();?>admin/tag_categories"> <i class="fa fa-tag" ></i> Tag Categories</a></li>

      <li class="<?php echo ((($this->router->fetch_class() == 'admin_users') || ($this->router->fetch_method() == 'addInvite') || ($this->router->fetch_method() == 'invite_edit')) ?  'active' : ''); ?>"><a ><i class="fa fa-users" ></i> Users <span class="active variant-border , fa fa-chevron-down"></span></a>
        <ul class="nav child_menu"  <?php echo ((($this->router->fetch_class() == 'admin_users') || ($this->router->fetch_method() == 'addInvite') || ($this->router->fetch_method() == 'invite_edit')) ?  'style="display:block;"' : ''); ?>>
          <li class="<?php echo (isset($current_page_users) && !empty($current_page_users)) ? $current_page_users : ''; ?>"><li><a href="<?php echo base_url();?>admin/users">Users</span></a></li>                 
          <li class="<?php echo (isset($current_page_users) && !empty($current_page_users)) ? $current_page_users : ''; ?>"><li><a href="<?php echo base_url();?>admin/invitation_requests">Invitations Requests</span></a></li>
          <li class="<?php echo (isset($current_page_users) && !empty($current_page_users)) ? $current_page_users : ''; ?>"><li><a href="<?php echo base_url();?>admin/invitation_pendings">Invitations Pendings</span></a></li>              
        </ul>
      </li> -->


      <!-- <li ><a href="<?php echo base_url();?>admin/category"> <i class="fa fa-th-large" ></i>Categories </a></li>   -->
      <!-- <li class="<?php echo (isset($current_page_users) && !empty($current_page_users)) ? $current_page_users : ''; ?>"><a href="<?php echo base_url();?>admin/session_category"> <i class="fa fa-list-ul" ></i> Session Categories</a></li> -->

      <!-- <li class="<?php echo (($this->router->fetch_class() == 'quick_survey') ?  'active' : ''); ?>"><a ><i class="fa fa-list-ul" ></i> Quick Survey <span class="active variant-border , fa fa-chevron-down"></span></a>
        <ul class="nav child_menu"  <?php echo (($this->router->fetch_class() == 'quick_survey') ?  'style="display:block;"' : ''); ?>>
          <li class="<?php echo (isset($current_page_users) && !empty($current_page_users)) ? $current_page_users : ''; ?>"><a href="<?php echo base_url();?>admin/survey_questions"> <i class="fa fa-question-circle" ></i> Survey Questions</a></li>
      
          <li class="<?php echo (isset($current_page_users) && !empty($current_page_users)) ? $current_page_users : ''; ?>"><a href="<?php echo base_url();?>admin/survey_options"> <i class="fa fa-check-circle" ></i> Survey Options</a></li>

          <li class="<?php echo (isset($current_page_users) && !empty($current_page_users)) ? $current_page_users : ''; ?>"><a href="<?php echo base_url();?>admin/survey_question_options"> <i class="fa fa-plus-circle" ></i> Question Options</a></li>
        </ul>
      </li> -->
      
      

<!-- 
      <li class="<?php echo (($this->router->fetch_class() == 'transaction') ?  'active' : ''); ?>"><a ><i class="fa fa-users"></i> History Management<span class="active variant-border"></span></a>
        <ul class="nav child_menu"  <?php echo (($this->router->fetch_class() == 'transaction') ?  'style="display:block;"' : ''); ?>> 
          <li class="<?php echo (isset($current_page_deposite) && !empty($current_page_deposite)) ? $current_page_deposite : ''; ?>"><a href="<?php echo base_url();?>transaction/manage_deposite_acount">Deposite History </span></a></li>
          <li class="<?php echo (isset($current_page_customer) && !empty($current_page_customers)) ? $current_page_customers : ''; ?>"><a href="<?php echo base_url();?>transaction/user_security_history"> Security History </span></a></li>
          <li class="<?php echo (isset($current_page_bid_history) && !empty($current_page_bid_history)) ? $current_page_bid_history : ''; ?>"><a href="<?php echo base_url();?>transaction/bid_history"> Bid History </span></a></li>
          <li class="<?php echo (isset($current_page_deposit) && !empty($current_page_deposit)) ? $current_page_deposit : ''; ?>"><a href="<?php echo base_url();?>transaction/bank_deposit_list">Bank Deposit </span></a></li>
        </ul>
      </li>   -->
   </ul>
  </div>
</div>