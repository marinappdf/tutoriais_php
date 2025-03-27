**6.1 O QUE É MVC**

MVC é a sigla para Model-View-Controller, que é uma arquitetura que visa fornecer uma maneira de separar as funcionalidades envolvidas em uma aplicação de maneira a melhorar a manutenção do sistema. Atualmente, o MVC é considerado um padrão em engenharia de software utilizado por praticamente todos os frameworks modernos e nos principais projetos em todo o mundo.

No modelo MVC, a camada denominada Model representa os dados da aplicação. Nesta camada estarão todas as regras de negócio envolvidas no sistema. Lá estarão todas as lógicas necessárias para acessar e atualizar os dados da aplicação. O modelo fornece ao controlador acesso para que o mesmo possa utilizar as funcionalidades do model em sua própria lógica.

O controlador guarda todo o comportamento da aplicação, nele estão todas as funções que irão interpretar o que o usuário deseja fazer na aplicação, depois de interpretar o que o usuário desejar fazer dentro da aplicação, ele utiliza-se de funções do model para acessar os dados necessários e então completar a requisição.

A visualização (view) define como os dados serão mostrados para o usuário, toda a estilização da tela, bem como onde utilizar cada dado enviado pelo controller é definido nas visualizações. Com isso, podemos concluir que caso desejamos alterar o modo como os dados são mostrados, não precisamos alterar todo o sistema, podemos alterar apenas a camada de visualização sem afetar o sistema como um todo.

**6.2 COMO FUNCIONA?**

O MVC funciona da seguinte forma:

1. O usuário interage com a aplicação, enviando uma requisição para o controlador.
2. O controlador interpreta a requisição e decide qual ação tomar.
3. O controlador utiliza as funcionalidades do model para acessar os dados necessários.
4. O model retorna os dados para o controlador.
5. O controlador decide qual visualização mostrar para o usuário.
6. A visualização é renderizada e mostrada para o usuário.

**6.3 PORQUE UTILIZAR O MVC?**

Com o passar do tempo, as aplicações foram ficando cada vez mais complexas. Isso levou a uma dificuldade enorme de se atualizar estas aplicações, tornando uma verdadeira dor de cabeça qualquer mudança e/ou manutenção nestes sistemas. Com isso, a arquitetura MVC visa dividir o problema em partes menores e totalmente separadas, fazendo com que a lógica seja abstraída.

Tudo isso facilita a manutenção seja na questão do layout da aplicação, seja na regra de negócio, seja na ação dos controladores. Permite, também, a divisão da equipe, fazendo com que o processo de desenvolvimento do sistema seja muito mais rápido e escalável.

**6.4 FRAMEWORKS**

Um framework é uma abstração que une vários códigos com o intuito de prover uma funcionalidade genérica, para alcançar uma funcionalidade específica se deve utilizar as funções providas pelo framework. A utilização de frameworks faz com que o processo de desenvolvimento seja muito mais rápido, pois diversos códigos que deveriam ser escritos, caso a aplicação fosse desenvolvida desde o princípio, são apenas customizadas se utilizando do conjunto de códigos provido por este framework.

**6.5 PRINCIPAIS FRAMEWORKS QUE UTILIZAM MVC**

1. Laravel: Um dos frameworks mais populares, com foco na simplicidade e eficiência.
2. Symfony: Um framework modular, amplamente utilizado em projetos corporativos.
3. CodeIgniter: Reconhecido pela simplicidade e leveza, é ideal para projetos menores ou iniciantes.
4. CakePHP: Facilita o desenvolvimento rápido com convenções pré-definidas e ferramentas integradas.
5. Yii Framework: Ideal para criar aplicações de alto desempenho.
6. Phalcon: Um framework inovador que funciona como uma extensão C para PHP.
7. Zend Framework (Agora Laminas): Um framework corporativo que segue os padrões MVC, focado em segurança e escalabilidade.
8. Slim Framework: Um microframework leve, ideal para APIs RESTful e aplicações simples.

**6.6 ESTRUTURA DAS PASTAS**

A estrutura das pastas em um projeto MVC é fundamental para manter a organização	