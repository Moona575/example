<x-app-layout>
    <class="container">
        <!-- Your content goes here -->
        <div class="search-section">
            <label>Advanced</label>
            <input type="radio" name="search-type" value="patient" checked> Patient
            <input type="radio" name="search-type" value="claim"> Claim
            <div class="input-group">
                <select id="name-sequence">
                    <option value="first-last">First Name, Last </option>
                    <option value="last-first">Last Name, First </option>
                </select>
                <input type="text" placeholder="LEON, ABNER" id="name-input">
            </div>
            <button>Search</button>
        </div>

        <!-- Dashboard Container -->
        <div class="box">
<div class="inner-box">
<div class="content">
    <!-- News and Announcements Container -->
    <div class="news-announcements-container">
        <!-- Welcome Section Inside News Announcements -->
        <div class="welcome-section">
            <p><b>Welcome, {{ Auth::user()->name }}</b></p>
            <p>Logged in at {{ now()->format('m/d/Y h:i:s A (T)') }}</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                        class="logout">
                    {{ __('Logout') }}
                </x-dropdown-link>
            </form>
        </div>

        <!-- News and Announcements Content -->
        <div class="news-announcements">
        <h2>News and Announcements</h2>
                <h3>Practices innovations– Release Notes 2024-07-11</h3>
                <p>This release includes new exciting features, improvements, and enhancements in Practices innovations  EHR and PM. <a href="#">Read more</a></p>

                <h4>Summary of Enhancements and Updates:</h4>
                <ul>
                    <li><strong>Practices innovations :</strong> Medication and allergy updates, Order Results resolution, Print PDF option for Electronic Lab Order Results, Encounter signing permission restrictions, Improved Problem List functionality, Inbound Patient API enhancements, AI-powered Ambient Assist activation permissions and eCQM BMI screening performance resolution.</li>
                    <li><strong>Practices innovations :</strong> Patient statements older than 30 days will no longer be sent for print and mail, ensuring timely billing.</li>
                </ul>

                <h3>New! Practices innovations  Live Webinar</h3>
                <p> Practices innovations Announces Our Brand New Webinar "From Order to Results: Streamlining Point of Care Testing (POCT) and In-Office Medication Workflows". Join our upcoming webinar where we'll dive deep into the efficient management of POCT and in-office medication workflows. <a href="#">Click to Register Now.</a></p>
            </div>
        </div>
    </div>

    <!-- Shortcuts Section -->
    <div class="shortcuts-box">
    <div class="shortcuts">
        <h3>Learn More</h3>
        <a href="{{ route('KnowledgeBase') }}" class="btn">Knowledge Base</a>
        <a href="{{ route('LiveWebinars') }}" class="btn">Live Webinars</a>
        <a href="{{ route('eLearning') }}" class="btn">eLearning</a>

    <h3>Shortcuts</h3>
        <div class="shortcut-category">
            <h4>Patients</h4>
            <a href="#">Register a New Patient</a>
            <a href="#">Register a New Patient</a>
        </div>

        <div class="shortcut-category">
            <h4>Claims</h4>
            <a href="#">Manage Claims</a>
            <a href="#">Create a Claim</a>
            <a href="#">Claim Status Inquiry</a>
            <a href="#">Claim Status Report</a>
        </div>

        <div class="shortcut-category">
            <h4>Administration and Client Support</h4>
            <a href="#">Provider Maintenance</a>
            <a href="#">Payer Maintenance</a>
            <a href="#">Contact Client Support</a>
            <a href="#"> Practices innovations Marketplace Powered by Amazon</a>
        </div>
    </div>
</div>
</div>
</div>


    </main>
</body>
</x-app-layout>
