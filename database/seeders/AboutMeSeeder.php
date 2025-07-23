<?php

namespace Database\Seeders;

use App\Models\AboutMe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutMe::create([
            'name' => 'Alex van Poppel',
            'occupation' => 'Software Development Student',
            'displayEmail' => 'alexanderlommel@gmail.com',
            'displayLinkedIn' => 'https://www.linkedin.com/in/alex-v-p/',
            'displayGithub' => 'https://github.com/Alex-v-p',
            'displayPhone' => '+32 472 31 34 79',
            'location' => '3920 Lommel, Belgium',
            'birthDay' => '11/03/2005',
            'cvDownload' => 1,
            'description' => "Hi, I'm <strong>Alex van Poppel</strong>, a <strong>Software Development student</strong> at Thomas More in Geel. I chose Applied Computer Science because I've always been curious about how <strong>technology</strong> works, not just using apps but understanding the systems that make them run. I’m particularly interested in <strong>AI</strong> and how it can transform various industries.<br>

                            <p class='mt-2 text-left'>In my free time, I enjoy:</p>
                            <ul class='list-disc list-inside text-left mt-2 ml-4'>
                                <li><span class='font-bold text-[#A880A2]'>Solving real-world problems</span>: scripting or building tools to improve my digital life.</li>
                                <li><span class='font-bold text-[#A880A2]'>Experimenting with my NAS</span>: learning about <strong>networking</strong>, <strong>storage</strong>, and <strong>system maintenance</strong>.</li>
                                <li><span class='font-bold text-[#A880A2]'>Building custom PCs</span>: assembling systems and improving my knowledge of <strong>hardware</strong> and <strong>performance tuning</strong>.</li>
                            </ul><br>

                            In the future, I aim for a <strong>stable career in tech</strong>, ideally in an <strong>international setting</strong>, focusing on software or data engineering in fields like <strong>education</strong>, <strong>AI</strong>, or <strong>sustainability</strong>.",

            'imageLocation' => 'Other/profileImage.jpg',
        ]);
    }
}
