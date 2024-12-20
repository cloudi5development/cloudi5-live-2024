var form=$(".steps-validation").show();
$(".steps-validation").steps( {
    headerTag:"h6", bodyTag:"fieldset", transitionEffect:"fade", titleTemplate:'<span class="step">#index#</span> #title#', labels: {
        finish: "Submit"
    }
    , onStepChanging:function(a, b, c) {
        return b>c||!(3===c&&Number($("#age-2").val())<18)&&(b<c&&(form.find(".body:eq("+c+") label.error").remove(), form.find(".body:eq("+c+") .error").removeClass("error")), form.validate().settings.ignore=":disabled,:hidden", form.valid())
    }
    , onFinishing:function(a, b) {
        return form.validate().settings.ignore=":disabled", form.valid()
    }
    , onFinished:function(a, b) {
        //alert("Submitted!")
		$('#SubmitButtonTrigger').trigger('click');
    }
}

),
$(".steps-validation").validate( {
    ignore:"input[type=hidden]", errorClass:"danger", successClass:"success", highlight:function(a, b) {
        $(a).removeClass(b)
    }
    , unhighlight:function(a, b) {
        $(a).removeClass(b)
    }
    , errorPlacement:function(a, b) {
        a.insertAfter(b)
    }
    , rules: {
        email: {
            email: !0
        }
    }
}

);