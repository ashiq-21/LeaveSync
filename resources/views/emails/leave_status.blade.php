<h1>Hello, {{ $user->name }}</h1>

<p>Your leave request has been {{ $status }}.</p>

<p><strong>Leave Details:</strong></p>
<ul>
    <li>Start Date: {{ $leave->start_date }}</li>
    <li>End Date: {{ $leave->end_date }}</li>
    <li>Status: {{ $status }}</li>
</ul>

<p>Thank you!</p>
