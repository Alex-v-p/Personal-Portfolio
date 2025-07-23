<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Personal Portfolio
        Section::create([
            'title' => 'Introduction',
            'content' => 'This portfolio website was built to showcase my personal and academic projects, highlight my technical skills, and present a professional online presence. It allows potential employers, collaborators, or teachers to easily explore what I’ve worked on and how I’ve grown as a developer.',
            'projectId' => 1,
            'sectionOrder' => 1,
        ]);

        Section::create([
            'title' => 'Technologies Used',
            'content' => 'The website was built using Laravel as the backend framework, Livewire for reactive components, Tailwind CSS for styling, and Alpine.js for interactivity.<br><br> I used a SQLite database to store dynamic content to maintain clean and modular templates.',
            'projectId' => 1,
            'sectionOrder' => 2,
        ]);

        Section::create([
            'title' => 'My Role & Contributions',
            'content' => 'This was a solo project, so I was responsible for the entire design and development process. I structured the backend using Laravel, created a modular Blade setup for reusability across multiple components, implemented project and skill filtering with Livewire, and handled responsiveness and styling using Tailwind for both mobile and desktop viewing.<br><br>I also deployed the site and managed hosting myself. I used my Cloudflare domain alongside port-forwarding through an Nginx instance on my TrueNAS server to route any connections to the production version of my portfolio, which I am running in a Windows Server virtual machine.',
            'projectId' => 1,
            'sectionOrder' => 3,
        ]);


        Section::create([
            'title' => 'Development Process',
            'content' => 'I started by creating a Figma prototype to clearly define what I needed to build and to ensure it fulfilled all the necessary expectations.<br><br>Using this prototype, I created a data model for the application\'s database in StarUML. This allowed me to immediately begin implementing the database structure in the Laravel application.<br><br>After setting up the migrations, seeders, models, and relationships, I moved on to developing the frontend dynamically using Livewire, Tailwind CSS, and Alpine.js.<br><br>During and after development, I hosted the project on my server several times as a proof of concept to ensure everything functioned correctly.',
            'projectId' => 1,
            'sectionOrder' => 4,
        ]);

        Section::create([
            'title' => 'Challenges & Solutions',
            'content' => 'One challenge was getting the Livewire filtering system to work seamlessly in the production version of my application. Whenever I used the same method I used in the development version, it would always return an expired link. The issue was caused by the need for a CSRF token, which was missing in the production environment.',
            'projectId' => 1,
            'sectionOrder' => 5,
        ]);

        Section::create([
            'title' => 'Outcome / Results',
            'content' => 'The final product is a fully responsive and interactive portfolio that I actively use to present my work. It serves as a live example of my full-stack web development capabilities and demonstrates how I can apply the knowledge gained from all the classes I have completed so far.',
            'projectId' => 1,
            'sectionOrder' => 6,
        ]);

        Section::create([
            'title' => 'Reflection',
            'content' => 'Building my own portfolio taught me a lot about modular design, component reuse, and interactivity using Laravel and Livewire. I gained a deeper understanding of deployment and hosting, which helped me prioritize clarity and maintainability in my code. If I were to improve anything, I would add a more convenient way to update the content of my website, rather than changing it through seeders. I had already planned to implement this, but due to time constraints, I couldn’t complete it at this moment.',
            'projectId' => 1,
            'sectionOrder' => 7,
        ]);

        // Iot project
        Section::create([
            'title' => 'Introduction',
            'content' => 'For this IoT project, we developed a combined hardware and software system that uses AI to detect a person\'s head, aim a watergun at them, and fire. If the person gets too close, a secondary defense mechanism—a smoke screen—is automatically activated. The goal of the project was to integrate real-time computer vision, mechanical actuation, and embedded systems into a fun yet technically challenging security demonstration.',
            'projectId' => 2,
            'sectionOrder' => 1,
        ]);

        Section::create([
            'title' => 'Technologies Used',
            'content' => 'We used an Orange Pi as the central controller, connected to a USB camera for real-time image capture. Head detection was implemented using a pre-trained AI model with OpenCV and Python. Stepper motors were used to control the rotation and tilt of the watergun, and a relay-controlled fog machine was used to generate the smoke screen.<br><br>The software stack included Python for AI and device control, along with GPIO libraries for hardware communication.',
            'projectId' => 2,
            'sectionOrder' => 2,
        ]);

        Section::create([
            'title' => 'My Role & Contributions',
            'content' => 'I was responsible for all 3D modeling, including the design and printing of mounts for the watergun, camera, and motors. I also contributed to the AI and control logic—particularly the coordination between head detection and motor movement.<br><br>Our combined efforts ensured that the turret was mechanically stable and the software reliably translated visual input into accurate aiming and activation.',
            'projectId' => 2,
            'sectionOrder' => 3,
        ]);

        Section::create([
            'title' => 'Development Process',
            'content' => 'We began by prototyping head detection using OpenCV with various pre-trained models. Once detection was sufficiently accurate, we linked it to stepper motor logic to dynamically aim the turret. In parallel, I designed and printed custom 3D components to allow smooth rotation and firing.<br><br>Finally, we integrated the smoke screen system using relays and GPIO triggers, refining the timing and safety logic through extensive testing.',
            'projectId' => 2,
            'sectionOrder' => 4,
        ]);

        Section::create([
            'title' => 'Challenges & Solutions',
            'content' => 'One major challenge was synchronizing real-time detection with smooth motor movements while avoiding jitter and overshooting. We resolved this by adding cooldown timers and fine-tuning detection sensitivity.<br><br>Another issue was getting the AI to run efficiently on the Orange Pi. Due to hardware limitations, we couldn’t achieve fast onboard detection and had to compromise by simplifying model usage.',
            'projectId' => 2,
            'sectionOrder' => 5,
        ]);

        Section::create([
            'title' => 'Outcome / Results',
            'content' => 'The final system reliably detects a person, aims, and fires water within seconds. The smoke screen adds a dramatic layer of defense when someone enters a restricted proximity.<br><br> The integration of AI, electronics, and 3D design exceeded expectations, and the project was well-received for both its innovation and execution.',
            'projectId' => 2,
            'sectionOrder' => 6,
        ]);

        Section::create([
            'title' => 'Reflection',
            'content' => 'This project taught me a lot about bridging physical design with software logic. Working on both the mechanical and digital components gave me a deeper appreciation for system integration, timing, and hardware limitations. I’m especially proud of how well the 3D printed structures held up in practice. With more time, I would have added PID control for smoother aiming and upgraded the camera for better resolution.',
            'projectId' => 2,
            'sectionOrder' => 7,
        ]);

        // 3. Training Session Management System
        Section::create([
            'title' => 'Introduction',
            'content' => 'This project involved working closely with a real client to design a Training Session Management System. The goal was to streamline how students, clients, teachers, and administrators interact in the context of academic workshops. Through requirements analysis and use case modeling, we laid the foundation for a scalable and secure platform that enhances collaboration and maintains data integrity.',
            'projectId' => 3,
            'sectionOrder' => 1,
        ]);

        Section::create([
            'title' => 'Technologies Used',
            'content' => 'Although the project focused on analysis and planning rather than implementation, we used several tools and methodologies:<br><br>
                - <strong>StarUML</strong> for creating the use case diagram<br>
                - <strong>MoSCoW method</strong> for prioritizing functional and non-functional requirements<br>
                - <strong>Figma</strong> to design an interactive prototype<br>
                - <strong>Word</strong> for documentation<br>
                - <strong>Client Interviews</strong> for real-time communication and requirement gathering',
            'projectId' => 3,
            'sectionOrder' => 2,
        ]);

        Section::create([
            'title' => 'My Role & Contributions',
            'content' => 'I actively participated in both the client communication and technical documentation processes. I helped structure and occasionally lead the interviews, took notes during meetings, and contributed significantly to the use case diagram. I also played a key role in drafting the requirements analysis document, ensuring that all stakeholder needs were clearly represented and accurately prioritized using the MoSCoW framework.',
            'projectId' => 3,
            'sectionOrder' => 3,
        ]);

        Section::create([
            'title' => 'Development Process',
            'content' => 'We began by organizing a client meeting where we asked targeted questions to clarify the scope and goals of the application. After identifying the key stakeholders and system goals, we constructed a use case diagram to visualize user interactions with the system. We then compiled a detailed list of functional and non-functional requirements and prioritized them using the MoSCoW method. The process was collaborative and iterative, with regular meetings and feedback from both the client and our instructors. Finally, we created a Figma prototype to bring the concept to life.',
            'projectId' => 3,
            'sectionOrder' => 4,
        ]);

        Section::create([
            'title' => 'Challenges & Solutions',
            'content' => 'One major challenge was translating vague and evolving client expectations into concrete technical requirements. We addressed this by asking clarifying follow-up questions and using example scenarios to better define each use case. Another challenge was keeping the documentation comprehensive yet digestible. We solved this by keeping the use case diagram focused and the requirements well-categorized.',
            'projectId' => 3,
            'sectionOrder' => 5,
        ]);

        Section::create([
            'title' => 'Outcome / Results',
            'content' => 'We delivered a complete requirements analysis document, a clear use case diagram, and an interactive Figma prototype. The client appreciated the clarity and structure of our deliverables, particularly the way we broke down functionalities and prioritized them. Our work laid a strong foundation for potential future development and was positively evaluated by both the client and our instructor.',
            'projectId' => 3,
            'sectionOrder' => 6,
        ]);

        Section::create([
            'title' => 'Reflection',
            'content' => 'This project strengthened my ability to communicate with non-technical stakeholders and transform abstract ideas into structured, technical documentation. I learned the importance of stakeholder engagement and prioritization methods in early-stage planning. Creating the Figma prototype helped bring the vision to life and showed how useful visual tools are in gathering feedback. If I were to do the project again, I’d introduce clickable wireframes even earlier in the process to align expectations sooner.',
            'projectId' => 3,
            'sectionOrder' => 7,
        ]);

        // 4. Placement Prediction using Machine Learning
        Section::create([
            'title' => 'Introduction',
            'content' => 'This project explored the use of machine learning techniques to predict whether a student would be placed in a job based on academic and background factors. Our aim was to extract meaningful insights from the dataset and build a predictive model to support career services in identifying placement likelihood. The project was split between two team members: I focused on placement prediction and data analysis, while my teammate worked on salary prediction.',
            'projectId' => 4,
            'sectionOrder' => 1,
        ]);

        Section::create([
            'title' => 'Technologies Used',
            'content' => '- <strong>Python</strong> for data preprocessing, analysis, and model training<br>
        - <strong>Pandas</strong> and <strong>Matplotlib</strong> for data cleaning and visualization<br>
        - <strong>Scikit-learn</strong> for model development and evaluation<br>
        - <strong>Jupyter Notebooks</strong> for experimentation and presentation<br>
        - <strong>Logistic Regression, Decision Trees, and Random Forest</strong> as predictive models',
            'projectId' => 4,
            'sectionOrder' => 2,
        ]);

        Section::create([
            'title' => 'My Role & Contributions',
            'content' => 'I was responsible for cleaning the dataset, performing exploratory data analysis, and building models to predict whether a student would be placed or not. This included handling missing values, encoding categorical features, and evaluating model performance using accuracy, precision, and recall metrics. I also visualized relationships between features such as education percentage, gender, specialization, and placement outcomes.',
            'projectId' => 4,
            'sectionOrder' => 3,
        ]);

        Section::create([
            'title' => 'Development Process',
            'content' => 'We began with data exploration and visualization to understand feature distributions and correlations. I applied label encoding and addressed class imbalance using resampling techniques. Multiple machine learning models were trained and evaluated using cross-validation, with an optimized Random Forest model achieving the best balanced accuracy. Meanwhile, my teammate developed a regression model to predict expected salaries for placed students.',
            'projectId' => 4,
            'sectionOrder' => 4,
        ]);

        Section::create([
            'title' => 'Challenges & Solutions',
            'content' => 'One major challenge was the imbalance between "placed" and "not placed" classes, which initially led to biased predictions. We attempted to mitigate this using stratified sampling and techniques like SMOTE, but the improvements were limited. Overfitting was another issue across most models, which we addressed using pruning and hyperparameter tuning — again, with only marginal improvements.',
            'projectId' => 4,
            'sectionOrder' => 5,
        ]);

        Section::create([
            'title' => 'Outcome / Results',
            'content' => 'The final classification model achieved over 85% accuracy and provided clear insights into the factors most correlated with placement. Our visualizations revealed key patterns in student profiles, and the salary prediction model developed by my teammate showed how specialization and academic performance influenced expected compensation. These models form a solid foundation for tools that could support academic career guidance.',
            'projectId' => 4,
            'sectionOrder' => 6,
        ]);

        Section::create([
            'title' => 'Reflection',
            'content' => 'This project deepened my understanding of working with real-world data, especially the importance of preprocessing and careful model evaluation. It highlighted the limitations of machine learning when faced with imbalanced datasets, and the need for critical thinking beyond just applying algorithms. Working alongside a teammate focused on regression also helped me appreciate the complementary nature of different machine learning tasks.',
            'projectId' => 4,
            'sectionOrder' => 7,
        ]);


        // 5. International student portal
        Section::create([
            'title' => 'Project Overview',
            'content' => 'This project aimed to build a user-friendly platform for managing international student exchanges. My team began by analyzing the solution documents of three other teams, extracting the most effective and innovative ideas, and combining them into a unified prototype that we presented to the client. Upon receiving approval, we started development using the Scrum methodology.',
            'projectId' => 5,
            'sectionOrder' => 1,
        ]);

        Section::create([
            'title' => 'My Role & Contributions',
            'content' => 'I led the analysis phase, reviewing the deliverables of three teams and merging the strongest features into a clear, cohesive prototype. During development, I worked on much of the frontend and data structure design, regularly communicating with the product owner to validate features and improve usability.',
            'projectId' => 5,
            'sectionOrder' => 2,
        ]);

        Section::create([
            'title' => 'Technologies Used',
            'content' => '- <strong>Laravel & Livewire</strong> for the full-stack framework<br>
                        - <strong>Tailwind CSS</strong> for styling<br>
                        - <strong>Scrum</strong> for project management and sprints<br>
                        - <strong>Figma</strong> for the prototype and client review<br>
                        - <strong>Git & GitHub</strong> for collaboration and version control',
            'projectId' => 5,
            'sectionOrder' => 3,
        ]);

        Section::create([
            'title' => 'Development Process',
            'content' => 'After validating the prototype with the client, we entered an iterative development cycle using Scrum. We held planning and review sessions, and each sprint focused on a specific functional set such as authentication, student dashboards, or admin management. We constantly evaluated progress and adapted based on client feedback.',
            'projectId' => 5,
            'sectionOrder' => 4,
        ]);

        Section::create([
            'title' => 'Challenges & Solutions',
            'content' => 'One challenge was merging different design philosophies and technical approaches from the three initial teams. To overcome this, I discussed every option thoroughly with my team and others to justified every feature in the final prototype. Maintaining clear communication with the client also helped align expectations early, reducing friction later in development.',
            'projectId' => 5,
            'sectionOrder' => 5,
        ]);

        Section::create([
            'title' => 'Current Status',
            'content' => 'As of now, we are in the final sprint. Most core functionalities have been implemented, and we are focusing on polishing the user experience, resolving bugs, and preparing for the final delivery and presentation to the client.',
            'projectId' => 5,
            'sectionOrder' => 6,
        ]);

    }
}
