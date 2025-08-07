<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <h1>Job Index Page</h1>
    @foreach ( $jobss as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>
            <p>Company: {{ $job['company'] }}</p>
        </div>
    
    @endforeach 
    
    
</div>