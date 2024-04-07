<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ETEC ZL</title>
    <link rel="icon" href="img/Logo-escuro.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <main class="bg-blue-50 rounded-xl">
        <img src="{{asset('img/LOGO-ETEC.webp')}}" class="w-1/5 rounded" alt="entrada alto">
        <h1 class="font-bold p-2 text-3xl">ETEC Zona Leste</h1>
    <div class="login aligntext-right p-3">
    <a href="/login" class="border border-blue-800 rounded-md p-2 bg-black text-white font-bold">Login</a>
    <a href="/register" class="border border-blue-800 rounded-md p-2 bg-black text-white font-bold">Cadastro</a>
</div>
<p class="m-5">Bem vindo ao nosso site onde você pode ficar por dentro das nossas atualização.</p>
<div class="main-header ml-3">
    <a href="/" class="link text-green-800 font-bold hover:text-blue-500 focus:text-blue-500">Home</a>
    <a href="/contato" class="link text-green-800 font-bold hover:text-blue-500 focus:text-blue-500">Contato</a>
    <a href="/sobrenos" class="link text-green-800 font-bold hover:text-blue-500 focus:text-blue-500">Sobre nós</a>
</div>
<div class="flex flex-row items-center estrutura bg-blue-300 p-2 rounded m-5 p-5">
    <img src="{{asset('img/tela_bloqueio_wallpaper_etec.png')}}" class="w-3/5 rounded" alt="entrada alto">
    <div class="ml-auto">
        <h3 class="text-black font-bold text-right p-1">Estrutura</h3>
        <p class="text-right">Temos uma estrutura muito ampla para atender as demandas de estudo com acessibilidade para todos.</p>
    </div>
</div>
<div class="flex flex-col md:flex-row items-center espaco bg-blue-300 p-2 rounded m-5 p-5">
    <div class="md:w-1/2 md:pr-4">
        <img src="{{asset('img/panoramica_etec.png')}}" class="w-full rounded" alt="panoramica_etec">
    </div>
    <div class="md:w-1/2 md:pl-4">
        <h3 class="text-black font-bold p-1">Espaço</h3>
        <p class="mb-5">O espaço que fornecemos é suficiente para atender as demandas dos nossos cursos e capacitar nossos alunos.</p>
        <img src="{{asset('img/entrada.webp')}}" class="w-full rounded" alt="Espaço-entrada">
        <p>Temos muitas áreas abertas e salas no mesmo nível para facilitar a circulação dos alunos com necessidades especiais.</p>
    </div>
</div>
<div class="flex flex-row items-center espaco bg-blue-300 p-2 rounded m-5 p-5 ">
    <img src="{{asset('img/sala.webp')}}" class="w-3/5 rounded" alt="Sala">
    <div class="ml-auto">
        <h3 class="text-black font-bold p-1 ">Salas</h3>
        <p class="text-right">As salas estão prontas com otimos equipamentos para que os alunos possam se desenvolver.</p>
    </div>
</div>
<div class="flex flex-row items-center espaco bg-blue-300  p-2 rounded m-5 p-5 ">
    <img src="{{asset('img/auditório.webp')}}" class="w-3/5 rounded" alt="Auditório">
    <div class="ml-auto">
        <h3 class="text-black font-bold p-1 ">Auditório</h3>
        <p class="text-right">Contamos, com um exelente espaço para para apresentações, palestras e entre outros eventos para os alunos e comunidade.</p>
    </div>
</div>
<div class="cursos m-10">
<h3 class="text-black font-bold bx-md">Cursos</h3>
<p class=" m-2 text-justify">Esses são os cursos que oferemos:</p>
<br>
<ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <div class="border border-gray-600 p-4 rounded-md bg-white ">
        <i class='bx bx-line-chart bx-sm'></i>
        <li class="font-bold text-xl">Administração</li>
        <p class="mt-2">Como funcionam as organizações, desde empresas privadas até ONGs, passando por órgãos públicos, comércio e indústria. O estudante vai precisar de conhecimentos de língua portuguesa, matemática, história e geografia para compreender os principais assuntos do curso, como história da administração, evolução das organizações ao longo do tempo, contabilidade, leis que regulam o funcionamento das empresas e redação de documentos.</p>
    </div>
    <div class="border border-gray-600 p-4 rounded-md bg-white">
        <i class='bx bx-calculator bx-sm'></i>
        <li class="font-bold text-xl">Contabilidade</li>
        <p class="mt-2">Matemática e língua portuguesa são disciplinas importantes para entender a contabilidade, que é a ciência responsável por organizar as contas de uma empresa e registrar seus bens patrimoniais (como prédios, veículos e máquinas, entre outros). Além da matemática básica, que serve como ferramenta para calcular o lucro ou o prejuízo de uma empresa, o estudante aprenderá matemática financeira, utilizada para operações de financiamento e cálculo de taxas de juros, por exemplo. O aluno também vai conhecer quais são as regras da contabilidade e todas as leis que estabelecem o que as empresas podem fazer e quais impostos devem pagar. Na área de Informática, o estudante vai aprender a fazer planilhas e a usar programas de computador específicos para a contabilidade.</p>
    </div>
    <div class="border border-gray-600 p-4 rounded-md bg-white">
        <i class='bx bx-desktop bx-sm'></i>
        <li class="font-bold text-xl">Desenvolvimento de Sistemas</li>
        <p class="mt-2">É o profissional que analisa e projeta sistemas. Constrói, documenta e realiza produção de sistemas e páginas web.</p>
    </div>
    <div class="border border-gray-600 p-4 rounded-md bg-white">
        <i class='bx bxs-truck bx-sm'></i>
        <li class="font-bold text-xl">Logística</li>
        <p class="mt-2">Logística é o planejamento do caminho feito por um produto ou serviço até chegar ao cliente de forma organizada, rápida e econômica. Para planejar esse caminho, o estudante vai precisar de conhecimentos de matemática, geografia e física. O aluno aprenderá sobre os processos de compra de matérias-primas, incluindo a escolha dos fornecedores, o registro dos pedidos de compra e o recebimento dos materiais adquiridos.</p>
    </div>
    <div class="border border-gray-600 p-4 rounded-md bg-white">
        <i class='bx bxs-user-check bx-sm'></i>
        <li class="font-bold text-xl">Recursos Humanos</li>
        <p class="mt-2">Anuncia vagas de emprego, descrevendo as atribuições do cargo a ser preenchido; aplica testes em processos seletivos; realiza cálculos para determinar os valores que serão descontados no salário dos funcionários, como o Imposto de Renda e a contribuição ao INSS, além de porcentagem referente a benefícios, como vale-transporte, plano de saúde etc.; insere informações no sistema para a geração de demonstrativos de pagamentos (holerites ou contracheques); cuida da documentação necessária para aposentadoria, contratação e demissão de profissionais, inclusive preenchendo informações na carteira de trabalho; organiza e arquiva documentos do setor; registra e controla período de férias e afastamento de funcionários; e auxilia no treinamento e capacitação dos empregados.</p>
    </div>
    <div class="border border-gray-600 p-4 rounded-md bg-white">
        <i class='bx bx-list-ol bx-flip-vertical bx-sm'></i>
        <li class="font-bold text-xl">Serviços Jurídicos</li>
        <p class="mt-2">Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do Direito. Vai aprender sobre a Constituição Federal (direito constitucional), a punição aos crimes (direito penal), as regras para relações e disputas entre as pessoas e também as normas para disputas e questões familiares (direito civil), o funcionamento dos órgãos públicos (direito administrativo), as regras para os negócios entre empresas e pessoas (direito empresarial), como deve ser a relação entre patrão e empregado, considerando direitos e deveres de cada um (direito do trabalho), cobrança de tributos, como os impostos (direito tributário) e a proteção garantida aos consumidores (direito do consumidor), entre outros assuntos.</p>
    </div>
</ul>
</div>
</main>
<footer class="flex items-center justify-center bottom-0 w-full bg-green-200 text-black py-4 text-center">
    <p>&copy; ETEC Zona Leste. Todos os direitos reservados.</p>
</footer>
</body>
</html>
