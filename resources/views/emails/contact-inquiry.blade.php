<h1>New Contact Message</h1>

<p><strong>Name:</strong> {{ $details['name'] }}</p>
<p><strong>Email:</strong> {{ $details['email'] }}</p>
<p><strong>Subject:</strong> {{ $details['subject'] }}</p>
<p><strong>Message:</strong></p>
<p>{!! nl2br(e($details['message'])) !!}</p>
