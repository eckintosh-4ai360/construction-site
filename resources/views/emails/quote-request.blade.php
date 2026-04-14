<h1>New Consultation Request</h1>

<p><strong>Name:</strong> {{ $details['name'] }}</p>
<p><strong>Email:</strong> {{ $details['email'] }}</p>
<p><strong>Phone:</strong> {{ $details['phone'] }}</p>
<p><strong>Project Details:</strong></p>
<p>{!! nl2br(e($details['message'])) !!}</p>
