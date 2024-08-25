<?php
// Contadores
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;

// Perguntas do Quiz
$questions = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20'];

// Contando as respostas
foreach ($questions as $question) {
    if (isset($_POST[$question])) {
        switch ($_POST[$question]) {
            case 'a':
                $countA++;
                break;
            case 'b':
                $countB++;
                break;
            case 'c':
                $countC++;
                break;
            case 'd':
                $countD++;
                break;
        }
    }
}

// Resultado 
echo "<h1>Resultados do Teste Vocacional</h1>";
echo "<p>Total de respostas 'a': $countA</p>";
echo "<p>Total de respostas 'b': $countB</p>";
echo "<p>Total de respostas 'c': $countC</p>";
echo "<p>Total de respostas 'd': $countD</p>";

// Analise do resultado
$maior = max($countA, $countB, $countC, $countD);

if ($maior == $countA) {
    echo "<h2>Maior Pontuação Em 'A'</h2><p>
            Pessoas do tipo A não gostam de rotina. Gostam de novidade. Apresentam destreza física e boa expressão corporal. Se forem mais propensos ao raciocínio lógico, terão mais êxito em profissões que requeiram precisão e acuidade. Se forem mais inclinados ao sentimento e à emoção, as profissões relacionadas ao trato com pessoas são as mais indicadas. Ações constantes que envolvam o trabalho como uma grande fonte de prazer.
        </p>
        
        <h2>Carreiras mais apropriadas:</h2>
        <ul>
            <li>Dermatologista</li>
            <li>Estilista</li>
            <li>Esportista</li>
            <li>Personal trainer</li>
            <li>Personal stylist</li>
            <li>Ginecologista</li>
            <li>Cirurgião plástico</li>
            <li>Piloto</li>
            <li>Instrutor de voo</li>
            <li>Cirurgião</li>
            <li>Médico clínico</li>
            <li>Guia de turismo</li>
            <li>Jornalista</li>
            <li>Publicitário</li>
            <li>Relações públicas</li>
            <li>Ator</li>
            <li>Músico</li>
            <li>Fotógrafo</li>
            <li>Paisagista</li>
            <li>Chef de cozinha</li>
            <li>Roteirista</li>
            <li>Artista plástico</li>
            <li>Anestesista</li>
            <li>Coreógrafo</li>
            <li>Instrumentador</li>
            <li>Dançarino</li>
        </ul>";
} elseif ($maior == $countB) {
    echo "<h2>Maior Pontuação Em 'B'</h2><p>Comando e responsabilidade são duas palavras que definem as pessoas do tipo B. Elas gostam de lidar com fatos, quantidades, análises, organização e planejamento. Trabalham duro e preferem profissões que lhes proporcionem status e possibilidade de crescimento. São as mais presentes no mundo corporativo.</p> <h2>Carreiras mais apropriadas</h2> <ul> <li>Administrador de empresas</li> <li>Advogado</li> <li>Assistente social</li> <li>Bibliotecário</li> <li>Juiz de direito</li> <li>Delegado</li> <li>Engenheiro mecânico/químico</li> <li>Pastor/padre/rabino</li> <li>Policial</li> <li>Promotor público</li> </ul>";
} elseif ($maior == $countC) {
    echo "<h2>Maior Pontuação Em 'C'</h2><p>Facilmente reconhecíveis por seu entusiasmo e interesse nas relações humanas, as pessoas do tipo C têm na intuição o seu ponto forte. Muitas endereçam seu esforço e talento para o desenvolvimento intelectual de alunos e discípulos e o conforto psicológico de pacientes e colegas de trabalho. No grupo C, estão as personalidades mais laureadas como Nobel da Paz e de literatura.</p> <h3>Carreiras mais apropriadas</h3> <ul> <li>Artista plástico</li> <li>Dramaturgo</li> <li>Educador</li> <li>Escritor</li> <li>Professor</li> <li>Psicólogo</li> <li>Psiquiatra</li> <li>Filósofo</li> <li>Jornalista</li> <li>Pedagogo</li> <li>Socitólogo</li> <li>Terapeuta ocupacional</li> <li>Tradutor</li> </ul> ";
} else {
    echo "<h2>Maior Pontuação Em 'D'</h2><p>
            São intuitivos como os C, mas em vez de se preocupar com pessoas, costumam focar seus interesses em grandes áreas do conhecimento, como ciência e tecnologia. Apresentam notável capacidade para identificar problemas concretos e resolvê-los, bem como para o raciocínio abstrato.
        </p>
        
        <h2>Carreiras mais apropriadas:</h2>
        <ul>
            <li>Analista de sistemas</li>
            <li>Antropólogo</li>
            <li>Arquiteto</li>
            <li>Astrônomo</li>
            <li>Criador de software</li>
            <li>Designer industrial</li>
            <li>Economista</li>
            <li>Engenheiro</li>
            <li>Físico</li>
            <li>Líder de uma corporação</li>
            <li>Matemático</li>
            <li>Militar</li>
            <li>Oceanógrafo</li>
            <li>Pesquisador</li>
            <li>Químico</li>
            <li>Músico (regente)</li>
            <li>Urbanista</li>
            <li>Zoologo</li>
        </ul>";
}

echo "<p><a href='index.html' style='background-color: #000; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none;'>Voltar para a página inicial e responder novamente</a></p>";

?>
