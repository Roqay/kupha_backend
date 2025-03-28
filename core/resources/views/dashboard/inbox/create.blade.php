
<div>
    <div class="box">
        <div class="box-header dker">
            <h3><i class="material-icons">
                    &#xe02e;</i> {{ __('backend.compose') }}
            </h3>
        </div>
        <div class="box-tool">
            <ul class="nav">
                <li class="nav-item inline">
                    <a class="nav-link" href="{{ route('webmails') }}">
                        <i class="material-icons md-18">×</i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="box-body">
            {{Form::open(['route'=>['webmailsStore'],'method'=>'POST', 'files' => true ])}}
            <?php
            $siteTitle_var = "site_title_" . @Helper::currentLanguage()->code;
            $siteTitle_var2 = "site_title_" . config('roqay.default_language');
            if ($SiteSetting->$siteTitle_var != "") {
                $siteTitle = $SiteSetting->$siteTitle_var;
            } else {
                $siteTitle = $SiteSetting->$siteTitle_var2;
            }
            try {
                $from_email = $WebmailToreply->from_email;
                $msg_title = $WebmailToreply->title;
                $msg_details = $WebmailToreply->details;
            } catch (Exception $e) {
                $from_email = $contact_email;
                $msg_title = "";
                $msg_details = "";
            }
            if ($stat == "replay") {
                $msg_title = "Re: " . $msg_title;
                $msg_details = "<br><hr><small>" . $msg_details . "</small>";
            }
            if ($stat == "forward") {
                $from_email = "";
                $msg_title = "Forward: " . $msg_title;
            }
            ?>
            {!! Form::hidden('contact_id','') !!}
            {!! Form::hidden('father_id','') !!}
            {!! Form::hidden('from_email',config('roqay.mail_from_address')) !!}
            {!! Form::hidden('from_name',$siteTitle) !!}
            {!! Form::hidden('from_phone','') !!}
            {!! Form::hidden('to_name','') !!}

            <div class="form-group row">
                <label for="title_en"
                       class="col-sm-2 form-control-label">{!!  __('backend.sendTo') !!}
                </label>
                <div class="col-sm-9">
                    {!! Form::email('to_email',$from_email, array('placeholder' => '','class' => 'form-control','id'=>'to_email','required'=>'')) !!}
                </div>
                <div class="col-sm-1">
                    <small>
                        <a onclick="document.getElementById('cc').style.display='block'">{!!  __('backend.sendCc') !!}</a><br>
                        <a onclick="document.getElementById('bcc').style.display='block'">{!!  __('backend.sendBcc') !!}</a>
                    </small>
                </div>
            </div>
            <div id="cc" style="display: none" class="form-group row">
                <label for="title_en"
                       class="col-sm-2 form-control-label">{!!  __('backend.sendCc') !!}
                </label>
                <div class="col-sm-9">
                    {!! Form::email('to_cc','', array('placeholder' => '','class' => 'form-control','id'=>'to_cc')) !!}
                </div>
                <div class="col-sm-1">
                    <a onclick="document.getElementById('to_cc').value='';document.getElementById('cc').style.display='none'"><i
                            class="material-icons md-18">×</i></a>
                </div>
            </div>
            <div id="bcc" style="display: none" class="form-group row">
                <label for="title_en"
                       class="col-sm-2 form-control-label">{!!  __('backend.sendBcc') !!}
                </label>
                <div class="col-sm-9">
                    {!! Form::email('to_bcc','', array('placeholder' => '','class' => 'form-control','id'=>'to_bcc')) !!}
                </div>
                <div class="col-sm-1">
                    <a onclick="document.getElementById('to_bcc').value='';document.getElementById('bcc').style.display='none'"><i
                            class="material-icons md-18">×</i></a>
                </div>
            </div>
            <div class="form-group row">
                <label for="title_en"
                       class="col-sm-2 form-control-label">{!!  __('backend.sendTitle') !!}
                </label>
                <div class="col-sm-10">
                    {!! Form::text('title',$msg_title, array('placeholder' => '','class' => 'form-control','id'=>'title','required'=>'')) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <div class="box p-a-xs">
                        {!! Form::textarea('details',$msg_details, array('ui-jp'=>'summernote','placeholder' => '','class' => 'form-control','ui-options'=>'{height: 250}')) !!}
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="attach_files"
                       class="col-sm-2 form-control-label">{!!  __('backend.AttachFiles') !!}</label>
                <div class="col-sm-10">
                    {!! Form::file('attach_files[]', array('class' => 'form-control','id'=>'attach_files','multiple'=>'')) !!}
                </div>
            </div>


            <div class="form-group row m-t-md">
                <div class="offset-sm-2 col-sm-10">
                    {!! Form::hidden('btn_clicked','', array('id'=>'btn_clicked')) !!}
                    <button type="submit" name="btn_send" onclick="document.getElementById('btn_clicked').value=''"  class="btn btn-primary m-t"><i
                            class="material-icons">
                            &#xe31b;</i> {!! __('backend.send') !!}</button>
                    <button type="submit" name="btn_draft" onclick="document.getElementById('btn_clicked').value='draft'" class="btn btn-default m-t"><i
                            class="material-icons">
                            &#xe161;</i> {!! __('backend.SaveToDraft') !!}</button>
                    <a href="{{ route('webmails') }}"
                       class="btn btn-default m-t"><i class="material-icons">
                            &#xe5cd;</i> {!! __('backend.cancel') !!}</a>
                </div>
            </div>

            {{Form::close()}}
        </div>
    </div>
</div>
