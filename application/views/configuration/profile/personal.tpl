{extends file="profile.tpl"}
{block name="profile_menu"}
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="{base_url()}profil"><i class="fa fa-inbox"></i> Inbox (14)</a></li>
        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
        <li><a href="#"><i class="fa fa-mail-forward"></i> Sent</a></li>
        <li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
        <li><a href="#"><i class="fa fa-folder"></i> Junk</a></li>
    </ul>
{/block}

{block name="profile_content"}
    <div class="table-responsive">
        <table class="table table-striped">
            
        </table>
    </div>
{/block}