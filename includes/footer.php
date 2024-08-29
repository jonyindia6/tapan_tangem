

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/668d8729c3fb85929e3d5831/1i2cdfv5v';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    <!--End of Tawk.to Script-->
</script>
<script type="text/javascript">
    
    $(document).on('click', '#toggleSidebar', () => $("#sidebar_div").css('margin-left', $("#sidebar_div").css("margin-left") == '-300px' ? '0px' : '-300px'));
    
    $(document).on('click', 'button.activeForm', (e) => {
        let btn = e.target;
        let word = $(btn).attr('data-word');
        $('button.activeForm').removeClass('formactive');
        $(btn).addClass('formactive');
        addInput(word);
    });
    
    $(document).ready(() => {
        setTimeout(()=> {
            addInput(12);
        },50);
    });
    
    addInput        =   (word)  =>  {
        console.log(word);
        let keys_input      =   '';
        $('.form_keys').html('');
        for (var i = 1; i <= parseInt(word); i++) {
            $('.form_keys').append(`<div class="col-sm-4 my12">
                <input type="text" name="keys[${i}]" class="form-control py8 key_input" placeholder="${i}" required="">
            </div>`)
        }
    }
</script>
