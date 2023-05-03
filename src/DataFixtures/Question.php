<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
class Question extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
       $question = new \App\Entity\Question();
       $question->setReponseCorrect("Kaydop");
       $question->setReponse(['Kronovi','Kaydop','JSTN','Vatira']);
       $question->setTheme($this->getReference('theme1'));
       $question->setIntitule('Comment s\'appelle le joueur Alexandre Courant ?');
         $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Octane");
        $question->setReponse(['Octane','Dominus','Fennec','Paladin']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Quel est le véhicule quon a en tout premier ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Psyonix");
        $question->setReponse(['EA','Ubisoft','Activision','Psyonix']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule('Quelle est l\'entreprise qui a créer Rocket League ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("2015");
        $question->setReponse(['2014','2015','2016','2017']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Quelle est l'année de sortie de Rocket League ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Vitality");
        $question->setReponse(['Dignitas','Vitality','NRG','Cloud 9']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Qui a gagné les RLCS de la saison 7 ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Vatira");
        $question->setReponse(['Vatira','Rise','Itachi','Monkey Moon']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Qui a quitté Moist Esport pour rejoindre la Karmine Corp ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Solary");
        $question->setReponse(['Dignitas','Karmine Corp','BDS','Solary']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Quelle structure a rejoins Kaydop après avoir quitté Vitality ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Zen");
        $question->setReponse(['Radosin','Zen','Extra','Fairy Peak']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Quel joueur banni 1 an des RLCS était très attendu chez Vitality ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Sandrock Gaming");
        $question->setReponse(['Sandrock Gaming','Rule One','Furia','Complexity']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("En avril 2022 Team Falcons acquiert un roster important. Comment se nommait la team de ce roster ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Turbopolsa");
        $question->setReponse(['Squishy','Violentpanda','Turbopolsa','Kaydop']);
        $question->setTheme($this->getReference('theme1'));
        $question->setIntitule("Qui a gagné le plus de fois les championnat du monde de Rocket League ?");
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Eminem");
        $question->setReponse(['Kanye West','Travis Scott','Kendrick Lamar','Eminem']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel rappeur a fait la chanson Lose Yourself ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Bring Me The Horizon");
        $question->setReponse(['Bring Me The Horizon','I Prevail','Bad Omens','Asking Alexandria']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel groupe de musique a créer l\'album Sempiternal ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Stoney");
        $question->setReponse(['Twelve Carat Toothache','beerbongs & bentley','Stoney','Hollywoods Bleeding']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel est le premier album de Post Malone ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("a-ha");
        $question->setReponse(['a-ha','Duran Duran','Bon Jovi','The Cranberries']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel groupe a chanté la chanson Take on Me ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Michael Jackson");
        $question->setReponse(['Bruno Mars','Prince','Elton John','Michael Jackson']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui a chanté la chanson Billie Jean ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Daniel Balavoine");
        $question->setReponse(['Michel Sardou','Daniel Balavoine','Jean-Jacques Goldman','Francis Cabrel']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui a sorti l\'album Sauver l\'amour en 1985 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("4");
        $question->setReponse(['3','4','5','6']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('De combien de membre était constitué le groupe Queen ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("BLACKPINK");
        $question->setReponse(['BTS','BLACKPINK','Stray Kids','ATEEZ']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Quel groupe de K-Pop a sorti la musique Shut Down ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("1996");
        $question->setReponse(['1994','1995','1996','1997']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('En quelle année est décédé 2Pac ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Jay-Z");
        $question->setReponse(['Jay-Z','Kanye West','Eminem','Drake']);
        $question->setTheme($this->getReference('theme2'));
        $question->setIntitule('Qui était en featuring sur le morceau Umbrella de Rihanna ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("GSP");
        $question->setReponse(['GSP','Rory Mcdonald','Mark Hominick','Carlos Newton']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quel est le combattant Canadien avec un record de 26-2 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Ciryl Gane");
        $question->setReponse(['Cheick Kongo','Ciryl Gane','Cyrille Diabate','Alan Baudot']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Quel combattant français a affronté Jon Jones en 2023 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Dana White");
        $question->setReponse(['Conor Mcgregor','Bruce Buffer','Daniel Cormier','Dana White']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Qui est le président de l\'UFC ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Ouzbékistan");
        $question->setReponse(['Ouzbékistan','Tadjikistan','Kazakhstan','Kirghizistan']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('De quel pays est originaire Shavkat Rakhmonov ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Judo");
        $question->setReponse(['Karaté','Lutte','Judo','Boxe']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('De quel est médaillé Olympique Ronda Rousey ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Dustin Poirier");
        $question->setReponse(['José Aldo','Khabib Nurmagomedov','Nate Diaz','Dustin Poirier']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Contre qui Conor Mcgregor s\'est il combattu a 3 reprises ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("1993");
        $question->setReponse(['1992','1993','1994','1995']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('En quelle année est créée l\'UFC ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Henry Cejudo");
        $question->setReponse(['John Dodson','Tim Elliott','Wilson Reis','Henry Cejudo']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Contre quel combattant Demetrious Johnson a t\'il perdu avant de quitter l\'UFC ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("3");
        $question->setReponse(['1','2','3','4']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('Combien de défaite possède Brock Lesnar ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Suèdois");
        $question->setReponse(['Norvègien','Suèdois','Russe','Kazakhstanais']);
        $question->setTheme($this->getReference('theme3'));
        $question->setIntitule('D\'origine tchétchène, de quelle nationalité est Khamzat Chimaev ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Dragon Ball");
        $question->setReponse(['My Hero Academia','Naruto','Dragon Ball','One Piece']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Comment se nomme le manga dont le protagoniste est Son Goku ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("37");
        $question->setReponse(['34','35','36','37']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Combien il y a d\'épisode de Death Note ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Kisame");
        $question->setReponse(['Sasori','Orochimaru','Deidara','Kisame']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Qui est le partenaire d\'Uchiha Itachi dans l\'Akatsuki ??');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("La génération terrible");
        $question->setReponse(['La génération miracle','La génération intrépide','La génération terrible','La génération horrible']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Après l\'ellipse, les Supernovae sont appelés : ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Des États-Unis");
        $question->setReponse(['Du Portugal','Du Brésil','De France','Des États-Unis']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Dans Kuroko\'s Basket, d\'où revient Kagami Taiga, avant d\'avoir intégré l\'équipe Seirin ? ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Genji Kamogawa");
        $question->setReponse(['Genji Kamogawa','Ryo Mashiba','Date Eiji','Dankichi Hama']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Comment se nomme l\'entraineur de Ippo ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Deku");
        $question->setReponse(['Haiku','Izuku','Deku','Kaku']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Quel est le surnom du protagoniste de My Hero Academia ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Daichi");
        $question->setReponse(['Daichi','Sugawara','Asahi','Kuroo']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Dans Haikyuu, qui est le capitaine de Karasuno ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Grey");
        $question->setReponse(['Erza','Natsu','Wendy','Grey']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Quel personnage de Fairy Tail préfère se battre sans vêtement ? ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Tomioka");
        $question->setReponse(['Kocho','Iguro','Uzui','Tomioka']);
        $question->setTheme($this->getReference('theme4'));
        $question->setIntitule('Dans Demon Slayer, qui est le pilier de l\'eau ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Basket");
        $question->setReponse(['Tennis','Football américain','Basket','Football']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Dans quel sport s’est illustré Michael Jordan ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("France");
        $question->setReponse(['France','Suisse','Allemagne','Espagne']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Où ont eu lieu les premiers JO d’hiver en 1924 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Pierre de Coubertain");
        $question->setReponse(['Godefroy de Blonay','Marie Rothan','Pierre de Coubertain','Demetrius Vikelas']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Qui est le fondateur des Jeux Olympiques modernes en 1894 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("5");
        $question->setReponse(['3','4','5','6']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Combien de fois le Brésil a-t-il remporté la Coupe du Monde de foot ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Nage synchronisée");
        $question->setReponse(['Jet-ski','Surf','Nage synchronisée','Water polo']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Quel sport est connu sous le nom de ballet aquatique ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Parapente");
        $question->setReponse(['Planche à voile','Aviron','Parapente','Plongée en falaise']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Parmi les propositions suivantes, laquelle n\'est pas un sport nautique ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Japon");
        $question->setReponse(['France','USA','Espagne','Japon']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule(' Où se trouve le plus grand centre de bowling ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Wushu");
        $question->setReponse(['Wushu','Escrime','Boxing','Jeet kune do']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('De tous les sports de combat ci-dessous, quel sport n\'a pas été pratiqué par Bruce Lee ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Badminton");
        $question->setReponse(['Volley-ball','Badminton','Tennis','Tennis de table']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Quel sport utilise une raquette, un filet et un volant ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Les Etats-Unis");
        $question->setReponse(['La Chine','Le Royaume-Uni','France','Les Etats-Unis']);
        $question->setTheme($this->getReference('theme5'));
        $question->setIntitule('Quel pays a le plus de médailles d\'or olympiques en natation ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Patrick Bateman");
        $question->setReponse(['Patrick Bateman','Travis Bickle','John Smith','Michael Myers']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Comment s\'appelle le personnage psychopathe joué par Christian Bale dans le film "American Psycho" ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Michael Myers");
        $question->setReponse(['Michael Miami','Michael Scofield','Michael Moore','Michael Myers']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Quel est le nom du tueur psychopathe masqué dans la franchise "Halloween" ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Le château de Cagliostro");
        $question->setReponse(['Porco Rosso','Le Royaume des Chats','Le château de Cagliostro','Boro la petite chenille']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Quel est le premier long-métrage du réalisateur japonais Hayao Miyazaki ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Andrew Garfield");
        $question->setReponse(['Andrew Garfield','Tom Holland','Tobey Maguire','Chris Pine']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Quel acteur a incarné Spider-Man au cinéma dans les films “The Amazing Spider-Man” en 2012 et 2014 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Pinocchio");
        $question->setReponse(['Cendrillon','Pinocchio','Peter Pan','Alice au Pays des Merveilles']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Quel est le second film Disney juste après Blanche Neige ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("C’est le navire le plus rapide des océans");
        $question->setReponse(['C’est un navire insubmersible','C’est le navire avec le plus de canon','C’est un navire maudit à jamais','C’est le navire le plus rapide des océans']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Quel est la spécificité du navire le Black Pearl dans Pirates des Caraïbes ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Michael Corleone");
        $question->setReponse(['Jimmy Conway','Michael Corleone','Al Capone','Tony Montana']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Comment s\'appelle le personnage joué par Al Pacino dans le film "Le Parrain" ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Au Pérou");
        $question->setReponse(['En Turquie','En Chine','En Bolivie','Au Pérou']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Dans le film “Indiana Jones et le Royaume du crâne de cristal”, où se situe ce royaume ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("2");
        $question->setReponse(['1','2','3','4']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Combien de films de la saga Jurassic Park ont été réalisés par Steven Spielberg ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Wakanda");
        $question->setReponse(['Ndala','Bewinda','Komidja','Wakanda']);
        $question->setTheme($this->getReference('theme6'));
        $question->setIntitule('Quel est le pays africain fictif du film Black Panther ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Lost : Les disparus");
        $question->setReponse(['Heroes','Breaking Bad','Lost : Les disparus','Friends']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Quel épisode pilot est le plus cher de l\'histoire de la télévision américaine ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("House of Cards");
        $question->setReponse(['House of Cards','The Crown','Orange is the new black','Stranger Things']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Quelle série lancée en 2013 est connue pour être la première série Netflix ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("456");
        $question->setReponse(['423','456','476','498']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Dans Squid Game, combien de joueurs participent au jeu ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Un lion");
        $question->setReponse(['Un cheval','Un ours','Un aigle','Un lion']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Dans « Game of Thrones », quel animal apparaît sur le blason de la maison Lannister ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Hawkins");
        $question->setReponse(['Durtery','Hawkins','Fairview','Milwaukee']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Dans quelle ville se déroule l\'action de la série Stranger Things ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Angus");
        $question->setReponse(['Angus','Ethan','Dean','Ayden']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Quel est le prénom du célèbre MacGyver dans la série du même nom ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Lupin");
        $question->setReponse(['The Last KIngdom','Marseille','Casa de Papel','Lupin']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Dans quelle série Omar Sy est le personnage principal ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Narcos");
        $question->setReponse(['Dark','Ozark','Sense 8','Narcos']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Quelle série met en avant le cartel de la drogue de Medellín ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Phénomène Raven");
        $question->setReponse(['Phénomène Raven','Hannah Montana','Jonas Brother','Lizzie McGuire']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Dans quelle série Disney, le personnage principal voit l\'avenir au travers de flashs ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Vanessa Williams");
        $question->setReponse(['Teri Hatcher','Nicolette Sheridan','Vanessa Williams','Kathryn Jooden']);
        $question->setTheme($this->getReference('theme7'));
        $question->setIntitule('Quelle actrice de la série Desperate Housewives a été élue Miss America en 1984 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Luigi");
        $question->setReponse(['Wario','Luigi','Waluigi','Mirio']);
        $question->setTheme($this->getReference('theme8'));
        $question->setIntitule('Comment s\'appelle le frère de Mario, le célèbre héros de Nintendo ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Il aspire ses ennemis avec sa bouche");
        $question->setReponse(['Il paralyse ses ennemis avec ses yeux','Il empale ses ennemis avec son nez','Il aspire ses ennemis avec sa bouche','Il gèle ses ennemis avec ses oreilles']);
        $question->setTheme($this->getReference('theme8'));
        $question->setIntitule('Quelle est la particularité de Kirby, la petite boule rose ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("GTA");
        $question->setReponse(['GTA','Call of Duty','Uncharted','Gears of War']);
        $question->setTheme($this->getReference('theme8'));
        $question->setIntitule('Si on vous dit : Franklin, Trevor, Michael, vous nous dites...');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Hérisson");
        $question->setReponse(['Hérisson','Souris','Renard','Rat']);
        $question->setTheme($this->getReference('theme8'));
        $question->setIntitule('De quel type d\'animal est Sonic, le célèbre héros de Sega ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Kratos");
        $question->setReponse(['Garos','Kramos','Gratos','Kratos']);
        $question->setTheme($this->getReference('theme8'));
        $question->setIntitule('Comment s\'appelle le puissant héros de la licence God Of War ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Les poumons");
        $question->setReponse(['L\'anus','Le coeur','Les poumons','L\'estomac']);
        $question->setTheme($this->getReference('theme9'));
        $question->setIntitule('Les insectes ont une tête, un thorax et un abdomen bien séparés entre eux. Quel est l\'organe interne dont ils sont dépourvus ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect('L\'avoine');
        $question->setReponse(['L\'avoine','Le pain','Les tomates','Les épluchures de légumes']);
        $question->setTheme($this->getReference('theme9'));
        $question->setIntitule('Quel aliment est bon à donner aux chevaux ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("6");
        $question->setReponse(['4','6','8','10']);
        $question->setTheme($this->getReference('theme9'));
        $question->setIntitule('Combien de pattes les fourmis possèdent-elles ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Le moineau");
        $question->setReponse(['L\'étourneau','Le moineau','Le pigeon','Le corbeau']);
        $question->setTheme($this->getReference('theme9'));
        $question->setIntitule('Quel oiseau est le plus répandu dans le monde aujourd’hui ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("160");
        $question->setReponse(['130','160','190','225']);
        $question->setTheme($this->getReference('theme9'));
        $question->setIntitule('Quel est le poids moyen d’un lion d’Afrique ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("New Delhi");
        $question->setReponse(['New Delhi','Bombay','Calcutta','Jaipur']);
        $question->setTheme($this->getReference('theme10'));
        $question->setIntitule('Quelle est la capitale de l\'Inde ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Kiev");
        $question->setReponse(['Odessa','Kherson','Kharkiv','Kiev']);
        $question->setTheme($this->getReference('theme10'));
        $question->setIntitule('Quelle est la capitale de l\'Ukraine ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Bagdad");
        $question->setReponse(['Ramadi','Erbil','Bagdad','Mossoul']);
        $question->setTheme($this->getReference('theme10'));
        $question->setIntitule('Quelle est la capitale de l\'Irak ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Brasilia");
        $question->setReponse(['Rio de Janeiro','Brasilia','Manaus','São Paulo']);
        $question->setTheme($this->getReference('theme10'));
        $question->setIntitule('Quelle est la capitale du Brésil ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Pékin");
        $question->setReponse(['Shanghai','Hong Kong','Pékin','Canton']);
        $question->setTheme($this->getReference('theme10'));
        $question->setIntitule('Quelle est la capitale de la Chine ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Canberra");
        $question->setReponse(['Canberra','Perth','Melbourne','Sydney']);
        $question->setTheme($this->getReference('theme10'));
        $question->setIntitule('Quelle est la capitale de l\'Australie ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("En 69 avant JC");
        $question->setReponse(['En 209 avant JC','En 119 avant JC','En 69 avant JC','En 9 avant JC']);
        $question->setTheme($this->getReference('theme11'));
        $question->setIntitule('En quelle année est née Cléopâtre, la dernière reine d’Égypte ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("La révolution industrielle");
        $question->setReponse(['La révolution industrielle','La révolution énergétique','La révolution numérique','La révolution agricole']);
        $question->setTheme($this->getReference('theme11'));
        $question->setIntitule('Quelle grande révolution s’est déroulée en France durant le XIXe siècle ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Le premier Président de la Ve république");
        $question->setReponse(['Le premier Président de la IVe république','Le dernier Président de la IVe république','Le premier Président de la Ve république','Le dernier Président de la Ve république']);
        $question->setTheme($this->getReference('theme11'));
        $question->setIntitule('Qui était Charles de Gaulle ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Invasion de la Pologne par l'Allemagne");
        $question->setReponse(['Invasion de la Belgique par l\'Allemagne','Invasion de la Pologne par l\'Allemagne','Invasion de l\'Italie par l\'Allemagne','Invasion de la France par l\'Allemagne']);
        $question->setTheme($this->getReference('theme11'));
        $question->setIntitule('Quel évènement a provoqué le début des conflits avec l’Allemagne en 1939 ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Le Grand");
        $question->setReponse(['Le Génie','Le Beau','Le Vaillant','Le Grand']);
        $question->setTheme($this->getReference('theme11'));
        $question->setIntitule('Connu sous le surnom “Le Roi-Soleil” quel autre surnom était attribué à Louis XIV ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Les incisives");
        $question->setReponse(['Les canines','Les molaires','Les prémolaires','Les incisives']);
        $question->setTheme($this->getReference('theme12'));
        $question->setIntitule('Quel est le nom des dents sur le devant de la denture humaine ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Mars");
        $question->setReponse(['Venus','Mars','Jupiter','Saturne']);
        $question->setTheme($this->getReference('theme12'));
        $question->setIntitule('Quelle planète est soupconnée d\'avoir autrefois abrité la vie ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect('L\'émeraude');
        $question->setReponse(['L\'émeraude','L\'améthyste','Le lapis-lazuli','Le quartz']);
        $question->setTheme($this->getReference('theme12'));
        $question->setIntitule('Quelle est la 4ᵉ pierre précieuse avec le diamant, le saphir et le rubis ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect('28 jours');
        $question->setReponse(['7 jours','14 jours','21 jours','28 jours']);
        $question->setTheme($this->getReference('theme12'));
        $question->setIntitule('Combien de temps dure la rotation complète de la Lune autour de la Terre ?');
        $manager->persist($question);

        $question = new \App\Entity\Question();
        $question->setReponseCorrect("Terrible lézard");
        $question->setReponse(['Monstre géant','Terrible lézard','Animal préhistoriques','Redoutables prédateurs']);
        $question->setTheme($this->getReference('theme12'));
        $question->setIntitule('Quelle est la signification étymologique du mot dinosaure ?');
        $manager->persist($question);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            Theme::class
        ];
    }
}
