<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="" target="_blank">{{ __('Our Trainers') }}</a>
                    </li>
                    <li>
                        <a href="" target="_blank">{{ __('about us') }}</a>
                    </li>
                    <li>
                        <a href="" target="_blank">{{ __('Blogs') }}</a>
                    </li>
                    <li>
                        <a href="" target="_blank">{{ __('Our Services') }}</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', made with ') }}<i class="fa fa-heart heart"></i>{{ __(' by ') }}<a class="@if(Auth::guest()) text-white @endif" href="https://www.creative-tim.com" target="_blank">{{ __('Alvin Odemu') }}</a>{{ __('') }}<a class="@if(Auth::guest()) text-white @endif" target="_blank" href="https://updivision.com">{{ __('') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>