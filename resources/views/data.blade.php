<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <title>The Gurdian</title>
</head>
<body>
    
    <div class="nav-container">
        <div class="container">
            <nav class="new-header__inner gs-container" data-component="nav2" role="navigation" aria-label="Guardian sections">
                <div class="new-header__cta-bar hide-until-mobile">
                    <div class="cta-bar__text hide-until-tablet">
                        <div class="cta-bar__heading">
                            Support The Guardian
                        </div>
                        <div class="cta-bar__subheading">
                            Available for everyone, funded by readers
                        </div>
                    </div>
                    <a class="cta-bar__cta hide-until-tablet js-subscribe js-acquisition-link" data-link-name="nav2 : subscribe-cta" data-edition="int" href="https://support.theguardian.com/int/subscribe?INTCMP=header_support_subscribe&amp;acquisitionData=%7B%22componentType%22%3A%22ACQUISITIONS_HEADER%22%2C%22componentId%22%3A%22header_support_subscribe%22%2C%22source%22%3A%22GUARDIAN_WEB%22%2C%22referrerPageviewId%22%3A%22k88xm7n1nddq77q2dzyq%22%2C%22referrerUrl%22%3A%22https%3A%2F%2Fwww.theguardian.com%2Fworld%2F2020%2Fmar%2F26%2Fnobody-will-starve-says-ocado-chair-urging-britons-to-stop-stockpiling%22%7D">Subscribe<span class="inline-arrow-right inline-icon "><svg width="30" height="30" viewBox="0 0 30 30" class="inline-arrow-right__svg inline-icon__svg"><path d="M22.8 14.6L15.2 7l-.7.7 5.5 6.6H6v1.5h14l-5.5 6.6.7.7 7.6-7.6v-.9"></path></svg></span></a>
                    <a class="cta-bar__cta hide-from-tablet js-change-become-member-link js-acquisition-link" data-link-name="nav2 : contribute-cta" data-edition="int" href="https://support.theguardian.com/int/contribute?INTCMP=header_support_contribute&amp;acquisitionData=%7B%22componentType%22%3A%22ACQUISITIONS_HEADER%22%2C%22componentId%22%3A%22header_support_contribute%22%2C%22source%22%3A%22GUARDIAN_WEB%22%2C%22referrerPageviewId%22%3A%22k88xm7n1nddq77q2dzyq%22%2C%22referrerUrl%22%3A%22https%3A%2F%2Fwww.theguardian.com%2Fworld%2F2020%2Fmar%2F26%2Fnobody-will-starve-says-ocado-chair-urging-britons-to-stop-stockpiling%22%7D">Contribute<span class="inline-arrow-right inline-icon "><svg width="30" height="30" viewBox="0 0 30 30" class="inline-arrow-right__svg inline-icon__svg"><path d="M22.8 14.6L15.2 7l-.7.7 5.5 6.6H6v1.5h14l-5.5 6.6.7.7 7.6-7.6v-.9"></path></svg></span></a>
                </div>
                <div class="logo">
                    <a href="https://www.theguardian.com/international" class="new-header__logo" data-link-name="nav2 : logo"><img src="{{ URL::asset('assets/images/logo.png') }}"></a>
                    </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($data as $item)

            <div class="col-md-4">
                <div class="card mt-3">
                    <img class="card-img-top" src="{{ URL::asset('assets/images/no-image.png') }}" alt="Card image">
                    <div class="card-body">
                        <p class="card-text"><span class="badge badge-info">Category: </span>{{$item['sectionName']}}</p>
                        <h4 class="card-title" style="min-height:110px;">{{$item['webTitle']}}</h5>
                        <a href="{{$item['webUrl']}}" class="btn btn-primary" target="_blank">See Details</a>
                    </div>
                </div>
            </div>
            
        @endforeach
            
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>