Epic Story:

The project is a FAQ where users can ask questions and post answers. The feature I have implemented is access controls wherein I have distinguished between the members trying to login as admin and user using Gates. Gates helped to authorize the action and policies helped in grouping the logic for implementing the action. Using gates, I have made the registration form to help members signup and using policies I was able to give access/ permissions to the members depending on the roles assigned. For example, the admin can create, edit and delete question but users can only view and create questions. I also made use of can middleware which is an inbuilt middleware which helped in filtering the mechanism which restricted the users to edit and delete question.

 

User Stories:

1.      The members must register and select which role they want.

2.      The admin must be able to create, edit and delete questions in the forum

3.      The admin must be able to create, edit and delete answers in the forum.

4.      The user must be able to view and create questions.

5.      The user must be able to view and create answers.