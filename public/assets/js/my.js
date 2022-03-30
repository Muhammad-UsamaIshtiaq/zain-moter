
        $('.datepicker').datepicker();

    
        $('.menu-trigger').click(function() {
            //var sidebarw = $('.sidebar').width();
            //alert(sidebarw);
            $('body').toggleClass('bodyClosed');
            $('.sidebar').toggleClass('menuClosed');

            //$('.sidebar').animate('slow').width(50);
            window.setTimeout(function() {
                $('.sidebar').toggleClass('sidebar-h');
            }, 500);
        });
        
        if ($(window).width() < 800) {
            $('body').addClass('bodyClosed');
            $('.sidebar').addClass('menuClosed sidebar-h');
        }


        $('li.sidebar-list').click(function() {
            //$(!(this).find('.subNavList')
            $('.subNavList').slideUp('slow');
            $(this).find('.subNavList').slideToggle('slow');
        });
    
        


        $(".progress-bar").ProgressBar();
        $('#example').DataTable();

        

        function abbreviateNumber(arr) {
            var newArr = [];
            $.each(arr, function (index, value) {
                var newValue = value;
                if (value >= 1000) {
                    var suffixes = [" ", " K", " mil", " bil", " t"];
                    var suffixNum = Math.floor(("" + value).length / 3);
                    var shortValue = '';
                    for (var precision = 2; precision >= 1; precision--) {
                        shortValue = parseFloat((suffixNum !== 0 ? (value / Math.pow(1000, suffixNum) ) : value).toPrecision(precision));
                        var dotLessShortValue = (shortValue + '').replace(/[^a-zA-Z 0-9]+/g, '');
                        if (dotLessShortValue.length <= 2) {
                            break;
                        }
                    }
                    if (shortValue % 1 !== 0)  shortNum = shortValue.toFixed(1);
                    newValue = shortValue + suffixes[suffixNum];
                }
                newArr[index] = newValue;
            });
            return newArr;
        }

        var labels = ["Toyota Corolla pdf pdfgdfg dfg", "Suzuki Mehran", "Honda City", "Honda Civic", "Suzuki Cultus", "Toyota Hilux", "BMW"];
        var values = [278, 167, 218, 140, 151, 250, 180];
        var outputValues = abbreviateNumber(values);

        $('.column-chart').simpleChart({
            /*title: {
                text: 'All Time Box Office - Top 10 Worldwide Grosses',
                align: 'center'
            },*/
            type: 'column',
            layout: {
                width: '100%',
                height: '450px'
            },
            item: {
                label: labels,
                value: values,
                outputValue: outputValues,
                color: ['#4361EE'],
                prefix: '$',
                suffix: '',
                render: {
                    margin: 0,
                    size: 'relative'
                }
            }
        });

        var labelst = ["Toyota Corolla", "Suzuki Mehran", "Honda City", "Honda Civic", "Suzuki Wagon R", "Suzuki Cultus", "Toyota Hilux", "Suzuki Swift", "BMW", "Toyota Aqua"];
        var valuest = [50, 167, 218, 140, 206, 151, 151, 250, 186];
        var outputValuest = abbreviateNumber(valuest);
        $('.column-charttwo').simpleChart({
            /*title: {
                text: 'All Time Box Office - Top 10 Worldwide Grosses',
                align: 'center'
            },*/
            type: 'column',
            layout: {
                width: '100%',
                height: '450px'
            },
            item: {
                label: labelst,
                value: valuest,
                outputValue: outputValuest,
                color: ['#4361EE'],
                prefix: '',
                suffix: '',
                render: {
                    margin: 5,
                    size: 'relative'
                }
            }
        });
        

    /*$('#btn-file-reset-id').on('click', function() {
        $('#fileId').val('');
    });*/
    $('.input-file').val('');
    (function() {
  
  'use strict';

  $('.input-file').each(function() {
    var $input = $(this),
        $label = $input.next('.js-labelFile'),
        labelVal = $label.html();
    
   $input.on('change', function(element) {
      var fileName = '';
      if (element.target.value) fileName = element.target.value.split('\\').pop();
      fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
   });
  });

})();




    $(".radp-yes").prop("checked", false);
    $(".radp-no").prop("checked", true);
    $('.part-input').val('');
    $('.radp-yes').click(function() {
        /*if($('.radp-yes').is(':checked')) {
            alert("it's checked"); 
        }*/
        $('.parteners-row').css('display','flex');
    });
    $('.radp-no').click(function() {
        $('.parteners-row').hide();
        $('.part-input').val('');
    });





    $(".local-v-yes").prop("checked", false);
    $(".local-v-no").prop("checked", true);
    $('.local-v-input').val('');
    $('.local-v-yes').click(function() {
        /*if($('.radp-yes').is(':checked')) {
            alert("it's checked"); 
        }*/
        $('.local-v-row').css('display','flex');
    });
    $('.local-v-no').click(function() {
        $('.local-v-row').hide();
        $('.local-v-input').val('');
    });
