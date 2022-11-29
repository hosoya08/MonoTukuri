
        // フォームチェック
        function check01(op) {
            $('#box1').click(function() {
                $(op).toggle(this.checked).toggleClass('open');
            });
        };
        
        check01(".check_text");
        check01(".c_form");



