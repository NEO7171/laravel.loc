<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>&copy{{date('Y')}}</p>
        <ul class="d-flex">
            @foreach($rubrics as $rubric)
                <li class="mr-3"><a href="#">{{$rubric->title}}</a></li>
            @endforeach
        </ul>
        <p>New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                href="/docs/4.6/getting-started/introduction/">getting started guide</a>.</p>
    </div>
</footer>
