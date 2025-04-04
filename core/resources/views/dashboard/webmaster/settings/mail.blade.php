<div class="tab-pane {{  ( Session::get('active_tab') == 'mailSettingsTab') ? 'active' : '' }}"
     id="tab-7">
    <div class="p-a-md"><h5>{!!  __('backend.mailSettings') !!}</h5></div>

    <div class="p-a-md col-md-12 b-b m-b-2">
        <div class="row">
            <div class="col-sm-5 form-group">
                <label>{!!  __('backend.mailDriver') !!}</label>
                <select name="mail_driver" id="mail_driver" class="form-control c-select">
                    <option
                        value="" {{ (config('roqay.mail_driver')== "") ? "selected='selected'":""  }}>
                        None
                    </option>
                    <option
                        value="sendmail" {{ (config('roqay.mail_driver')== "sendmail") ? "selected='selected'":""  }}>
                        sendmail - PHP mail()
                    </option>
                    <option
                        value="smtp" {{ (config('roqay.mail_driver')== "smtp") ? "selected='selected'":""  }}>
                        SMTP ( Recommended )
                    </option>
                    <option
                        value="mailgun" {{ (config('roqay.mail_driver')== "mailgun") ? "selected='selected'":""  }}>
                        Mailgun
                    </option>
                    <option
                        value="ses" {{ (config('roqay.mail_driver')== "ses") ? "selected='selected'":""  }}>
                        Amazon SES
                    </option>
                    <option
                        value="postmark" {{ (config('roqay.mail_driver')== "postmark") ? "selected='selected'":""  }}>
                        Postmark
                    </option>
                </select>
            </div>
            <div class="col-sm-5 form-group {{ (config('roqay.mail_driver') != "sendmail" && config('roqay.mail_driver') != "")?"":"displayNone" }}"
                 id="mail_host_div">
                <label>{!!  __('backend.mailHost') !!}</label>
                {!! Form::text('mail_host',config('roqay.mail_host'), array('id' => 'mail_host','class' => 'form-control', 'dir'=>'ltr')) !!}
            </div>
            <div class="col-sm-2 form-group {{ (config('roqay.mail_driver') != "sendmail" && config('roqay.mail_driver') != "")?"":"displayNone" }}"
                 id="mail_port_div">
                <label>{!!  __('backend.mailPort') !!}</label>
                {!! Form::text('mail_port',config('roqay.mail_port'), array('id' => 'mail_port','class' => 'form-control', 'dir'=>'ltr')) !!}
            </div>

            <div class="col-sm-5 form-group {{ (config('roqay.mail_driver') != "sendmail" && config('roqay.mail_driver') != "")?"":"displayNone" }}"
                 id="mail_username_div">
                <label>{!!  __('backend.mailUsername') !!}</label>
                {!! Form::text('mail_username',config('roqay.mail_username'), array('id' => 'mail_username','class' => 'form-control', 'dir'=>'ltr')) !!}
            </div>
            <div class="col-sm-7 form-group {{ (config('roqay.mail_driver') != "sendmail" && config('roqay.mail_driver') != "")?"":"displayNone" }}"
                 id="mail_password_div">
                <label>{!!  __('backend.mailPassword') !!}</label>
                {!! Form::text('mail_password',config('roqay.mail_password'), array('id' => 'mail_password','class' => 'form-control', 'dir'=>'ltr')) !!}
            </div>

            <div class="col-sm-5 form-group {{ (config('roqay.mail_driver') != "sendmail" && config('roqay.mail_driver') != "")?"":"displayNone" }}"
                 id="mail_encryption_div">
                <label>{!!  __('backend.mailEncryption') !!}</label>
                <select name="mail_encryption" id="mail_encryption" class="form-control c-select">
                    <option
                        value="" {{ (config('roqay.mail_encryption') == "") ? "selected='selected'":""  }}>
                        none
                    </option>
                    <option
                        value="ssl" {{ (config('roqay.mail_encryption') == "ssl") ? "selected='selected'":""  }}>
                        ssl
                    </option>
                    <option
                        value="tls" {{ (config('roqay.mail_encryption') == "tls") ? "selected='selected'":""  }}>
                        tls
                    </option>
                </select>
            </div>
            <div class="col-sm-7 form-group {{ (config('roqay.mail_driver') == "")?"displayNone":"" }}" id="mail_from_div">
                <label>{!!  __('backend.mailNoReplay') !!}</label>
                {!! Form::text('mail_no_replay',config('roqay.mail_from_address'), array('id' => 'mail_no_replay','class' => 'form-control', 'dir'=>'ltr')) !!}
            </div>
        </div>
        <button id="smtp_check" type="button"
                class="btn pull-right btn-sm info {{ (config('roqay.mail_driver') == "smtp")?"":"displayNone" }}">
            <i class="fa fa-bolt"></i> &nbsp;{{ __("backend.smtpCheck") }}
        </button>

        <button id="send_test" type="button" class="btn btn-sm info {{ (config('roqay.mail_driver') == "")?"displayNone":"" }}">
            <i class="fa fa-envelope"></i> &nbsp;{{ __("backend.sendTestMail") }}
        </button>
        <input type="hidden" name="mail_test" id="to_email" value="">
    </div>

    <div class="p-a-md"><h5>{!!  __('backend.messageTemplate') !!}</h5></div>
    <div class="p-x-md col-md-12">
        <div class="form-group">
            <span class="pull-right">{title}</span>
            <label>{!!  __('backend.messageTitle') !!}</label>
            {!! Form::text('mail_title',$WebmasterSetting->mail_title, array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <span class="pull-right">{details}</span>
            <label>{!!  __('backend.messageDetails') !!}</label>
            <div class="box p-a-xs">
                {!! Form::textarea('mail_template',$WebmasterSetting->mail_template, array('ui-jp'=>'summernote','class' => 'form-control summernote_'.@Helper::currentLanguage()->code,'ui-options'=>'{height: 200,callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable,"'.@Helper::currentLanguage()->code.'");
                }
            }}')) !!}
            </div>
        </div>
    </div>
</div>
