<?php
/**
 * Pre-populates the plugin with the initial set of educators.
 *
 * @package DreamEducators
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Insert the default educators if they haven't been added yet.
 */
function de_insert_default_educators() {
    $educators = array(
        array(
            'name'      => 'Lynne',
            'location'  => 'Located in Gulf Harbour',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Lynne-Ramsey-200x300.jpg',
            'bio'       => "Located in Gulf Harbour\n\nWith 21 years in the Home-Based sector, I began when my sons were young and now they're grown. The experience has been so rewarding that I've welcomed over 50 families into my home over the years.\n\nMy husband, our toy poodle cross Molly, and I share our home. Molly is accustomed to children and adores cuddles. One of the joys of Home-Based Childcare is offering children activities and outings similar to what they'd experience with their families.\n\nIncorporating the whanau in our activities makes my home feel like an extension of theirs, creating a sense of one big family. We often explore our beautiful coast, visiting playgrounds, beaches, and scenic walks. Additionally, we frequent the library, attend music and movement sessions, playgroups, and engage in various community activities.",
        ),
        array(
            'name'      => 'Lisa',
            'location'  => 'Located in Hibiscus Coast',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Lisa-Paxton-200x300.png',
            'bio'       => "Located in Hibiscus Coast\n\nHi! Meet Lisa. Living on the sunny Hibiscus Coast with her wonderful husband and their fur baby cat, she enjoys reading, dancing, walking, baking, and watching movies in her spare time. As a qualified Primary and ECE Teacher, Lisa spent seven years working in Early Childhood Centres before transitioning to the Home-Based sector in 2020. Since then, she hasn't looked back. Lisa has a deep passion for teaching children under five, considering it an honor to witness their growth and development. Embracing this special stage in their lives, she values the small ratios in home-based education for offering more personalized care and one-on-one time with each child.\n\nWhy I'm an Educator\n\nBelieving that children learn best through play and relationships, Lisa fosters an environment that supports and encourages this approach. She tailors activities to each child's individual needs and interests. Enthusiastic about reading, music, and dance, Lisa incorporates these into frequent activities at her home. Using their location to advantage, she takes the children on regular outings to the beach, playgroups, playgrounds, and the library. Beyond local adventures, Lisa enjoys exploring Auckland's attractions like the Zoo and MOTAT with them.",
        ),
        array(
            'name'      => 'Kerry',
            'location'  => 'Located in Gulf Harbour',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Kerry-Hanly-200x300.jpg',
            'bio'       => "Located in Gulf Harbour\n\nHi! I'm Kerry. Over the past 10 years, I've been caring for children in my home. Before this chapter, I worked as a preschool teacher and a Nanny. I cherish taking children out into the community and social settings, encouraging them to explore nature and engage in messy play. I'm passionate about home-based childcare due to the nurturing environment it provides. As a result, the children I care for quickly become part of my extended family. Speaking of family, I have two wonderful children, an 11-year-old boy and a 10-year-old girl, as well as a supportive husband.",
        ),
        array(
            'name'      => 'Sandy',
            'location'  => 'Located in Red Beach',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Sandy-Lin-200x300.jpg',
            'bio'       => "Located in Red Beach\n\nHi, I'm Sandy. Originally from Taiwan, I've made New Zealand my home along with my husband and our two beautiful daughters, aged 4 and 8. For the past 3.5 years, I've been working as a home-based Educator, holding a Level 5 Certificate in Early Childhood Education.\n\nChoosing Home-Based Childcare is rooted in my belief that an environment resembling home offers children a sense of safety and security. Additionally, such an environment helps them become confident learners. By tailoring learning experiences to each child's interests, I aim to motivate them in their unique ways.\n\nUnder my care, children experience a variety of learning environments. We venture out into the community to explore nature, attend playgroups, and participate in musical classes.",
        ),
        array(
            'name'      => 'Sherri',
            'location'  => 'Located in Stanmore Bay',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Sherri-Mitchell-200x300.jpg',
            'bio'       => "Located in Stanmore Bay\n\nSherri is a Home-Based Educator based in Stanmore Bay, Whangaparaoa. With two adult children, one of whom still lives at home, and two small older dogs, Sherri has been an Educator since 1998, starting when her first born was a baby. In her house, there's a purpose-built room with a deck and outside area set up specifically for the children. Additionally, the dogs are kept separate from this area to maintain a distinct space for the children.\n\nWatching children grow and develop in ability and confidence brings Sherri experiences immense joy. She deeply values the role she plays in supporting their development. Encouraging empathy and social skills in children is important to her.\n\nUnder her care, children learn to interact with their peers independently and are encouraged to ask for help when needed. Beyond the home, Sherri takes them out into the local community to enjoy the beautiful area they live in and to interact with other Educators.",
        ),
        array(
            'name'      => 'Sheri',
            'location'  => 'Located in Birkdale',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Sheri-Maghazeh-200x300.jpg',
            'bio'       => "Located in Birkdale\n\nHello, I'm Sheri. Married to my best friend, our family includes two beautiful children. My journey into early childhood education began six years ago when I became a mother. Since childhood, I've dreamed of teaching our tamariki, which has inspired me to continually strive to be my best self.\n\nBecoming an early childhood teacher has given me the genuine opportunity to make a difference in young lives and influence future generations. Engaging with children provides a continuous learning experience, and I'm always eager to acquire new skills. Notably, I hold a Level 3 Early Childhood Certificate from NZSE and have gained experience as a playcentre mum and in daycare settings.\n\nWhat I provide as an Educator\n\nMy passion lies in offering a safe, calm, and enriching environment for the children I care for. Tailoring a wide range of activities and learning opportunities to their interests and needs, I believe in giving children space to explore at their own pace, supported by me to reach their potential.\n\nIn my care, tamariki receive love and support, and families always feel welcome. Among the activities I offer are a purposefully set-up playroom, engaging art activities, a large outdoor play space equipped with swings, slides, and a trampoline, as well as sensory/messy play. We also explore the community by attending weekly music sessions, playgroups, bush walks, library storytime, and playdates with other Educators. I eagerly look forward to seeing you!",
        ),
        array(
            'name'      => 'Jana',
            'location'  => 'Located in Beach Haven',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Jana-Harrison-200x300.jpg',
            'bio'       => "Located in Beach Haven\n\nKia ora! My name is Jana and I live in Beach Haven with the youngest 2, of my 4 sons. We've called this area home for 20 years and would love to welcome you and your little one into our space. Since the beginning of 2016, I've worked as an Educator and hold a Level 4 NZ Certificate in Early Childhood Education and Care. My training includes being a Registered Nurse in New Zealand and roles as a Midwife and Health Visitor (similar to a Plunket Nurse) in the UK.\n\nWhat I provide as an Educator\n\nIn our home, I strive to create a warm, caring environment filled with rich experiences, activities, and creative spaces. I believe in giving children time for uninterrupted play within a calm, unhurried setting. Being outdoors brings joy to children, fostering wonder, curiosity, and a bond with nature. Through home-based care, I offer opportunities for kids to explore our beautiful local parks, bush, and beaches.\n\nOn top of that we enjoy outings to music classes, gymnastics, play dates, and visits to places like the library, museum, zoo, and Motat. Often, joining other Educators and friends, we experience the benefits of our small, mixed-age family group while connecting with a larger community. Lastly, if you're interested, feel free to reach out for a chat and visit to see if our setting might be the right fit for your child.",
        ),
        array(
            'name'      => 'Jeanine',
            'location'  => 'Located in Parakai',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Jeanine-Glen-200x300.jpg',
            'bio'       => "Located in Parakai\n\nI'm a mother of two girls and a stepmother to another young lady. Geoff is my husband, and together we share our home with a variety of animals: dogs, cats, birds, chickens, and a rabbit. These animals bring a lot of joy to our household, and the children in my care love helping to feed and look after them. Egg collecting is always a big hit; it's like an Easter egg hunt with our free-range chickens.\n\nFor the past 12 years, I've been involved in home-based childcare and cherish every moment of it. Witnessing the children learn new skills and grow is truly rewarding. They become an integral part of our whanau. Outdoor learning is a big focus for us, and we love exploring most mornings. The children's learning is guided by their interests.\n\nWe also regularly attend playgroups and mainly music sessions each week, adding to our enriching experiences.",
        ),
        array(
            'name'      => 'Rachel B',
            'location'  => 'Located in Helensville',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Rachel-Brenchley-200x300.jpg',
            'bio'       => "Located in Helensville\n\nHi, I'm Rachel. For the past 8 years, I've worked as a home-based Educator. Before this role, I was a qualified and registered ECE teacher, spending about 12 years in childcare centres, primarily with under 2's. As a solo parent to two school-aged children, the flexibility of home-based care suited my family well, allowing me to be there for my own children when needed.\n\nWhat I provide as a Educator\n\nHome-based care offers a chance to form close bonds with the children and their families. While I provide this type of care, we're not often at home. I enjoy exploring the community and its surroundings, from beaches and playgrounds to forests and skate parks. Most days, we join other Educators in the area, helping the children build relationships beyond their immediate group and allowing us to share ideas and support each other.\n\nI believe in providing children with a nurturing, relaxed environment where they can grow, explore, and interact socially. This approach fosters spontaneity and free play, helping children reach their full potential.",
        ),
        array(
            'name'      => 'Haley',
            'location'  => 'Located in Totara Heights in Manukau',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Haley-Casey-200x300.png',
            'bio'       => "Located in Totara Heights in Manukau\n\nMy name is Haley and I live with my partner Darin, 6 year old son Joshua and our 2 year old Cavoodle Sadie in Totara Heights in Manukau. Before starting my Home-Based Childcare service, I was a Nanny for over 10 years until the birth of my son in 2018. After taking a year off, I launched my childcare service. Making the transition from being a Nanny to a Home-Based Educator has been a natural progression for me. Children learn best through play and enjoying the local community. Providing a home away from home, I care for children as if they were my own. We spend our days goofing around and having fun, as well as instilling those important life skills.",
        ),
        array(
            'name'      => 'Christie',
            'location'  => 'Located in Stanmore Bay',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Screenshot-2024-04-18-141905-200x300.png',
            'bio'       => "Located in Stanmore Bay\n\nHi, I'm Christie. Working with children of all ages brings me great joy, and I've gathered substantial work and personal experience in this field. Throughout my career, I've taken on roles as a nanny and in other child-focused positions. Additionally, I've trained and worked as a Social Worker. With enthusiasm, commitment, and a proactive approach, I bring these qualities to my work, always eager to learn and ready to take initiative.",
        ),
        array(
            'name'      => 'Katie',
            'location'  => 'Located in Gulf Harbour',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Screenshot-2024-04-17-165320-200x300.png',
            'bio'       => "Located in Gulf Harbour\n\nThroughout my career, I've dedicated myself to caring for young children. Initially, I worked in full-day care centres in England. Later, I served as a Nanny, gaining valuable experience and insights. Eventually, I transitioned to a role as a Home-Based Educator. In every setting, my passion lies in providing the best care and abundant learning opportunities for young children. I firmly believe in treating them with respect and offering them opportunities to develop resilience, independence, and a wealth of knowledge and holistic skills that will benefit them throughout life. When children are in my care, they become part of my extended family.",
        ),
        array(
            'name'      => 'Shareen',
            'location'  => 'Located in Henderson',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Screenshot-2024-03-05-141757-200x300.png',
            'bio'       => "Located in Henderson\n\nShareen is a loving and experienced home-based educator who has cared for and educated many children over her time in the sector. Additionally, she has raised her own children and now enjoys time with her grandchildren. Committed to her community, Shareen always goes the extra mile to support the children in her care.",
        ),
        array(
            'name'      => 'Jen',
            'location'  => 'Central Auckland',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/3-PROFILE-PICTURE-4-200x300.jpeg',
            'bio'       => "Central Auckland\n\nKia Ora I'm Jen! I have been teaching in the ECE sector for 23 years, 15 of which I have been a home-based educator. This has been a fantastic experience and I have learnt a huge amount about the rewards and challenges of running my own business. The feedback I have had from many of my families shows my passion for the profession as well as the engaging learning environment, welcoming atmosphere, and comprehensive resources I have created during this time.",
        ),
        array(
            'name'      => 'Kim',
            'location'  => 'Central Auckland',
            'image_url' => 'https://dream.co.nz/wp-content/uploads/Kim-200x300.jpg',
            'bio'       => "Central Auckland\n\nI believe that all children should be treated with respect, in an environment that is safe, fun and where they are acknowledged as individuals.\n\nI provide an inclusive practice where all children, irrespective of gender, ethnicity, ability or background should have access to quality early childhood education managed with minimal stress throughout the transitions between home and school.\n\nI believe in creating strong relationships, working in partnership with parents/whanau and connecting to the wider community by providing opportunities to experience their place in it through attendance at Nearly Music, Play group, Library, Visits to MOTAT, The Zoo, Western Springs, Malls, Beaches and Parks. I incorporate the use of natural resources, recycling and discussions about current events as illustrations of respect for the environment. I utilise the public transport system which underpins my units on strategies and safety awareness.",
        ),
    );

    $menu_order = 1;
    foreach ( $educators as $educator ) {
        $post_id = wp_insert_post(
            array(
                'post_title'  => sanitize_text_field( $educator['name'] ),
                'post_type'   => 'dream_educator',
                'post_status' => 'publish',
                'menu_order'  => $menu_order++,
            )
        );

        if ( $post_id && ! is_wp_error( $post_id ) ) {
            update_post_meta( $post_id, '_de_location', sanitize_text_field( $educator['location'] ) );
            update_post_meta( $post_id, '_de_image_url', esc_url_raw( $educator['image_url'] ) );
            update_post_meta( $post_id, '_de_bio', sanitize_textarea_field( $educator['bio'] ) );
        }
    }
}
