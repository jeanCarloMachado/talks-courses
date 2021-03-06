#Clean Code

> There’s no problem so simple that a bad developer can’t make it complicated.
Steve Bohlen

> Programming is the art of telling another human what one wants the computer to do.
Donald Knuth

#Warning

A quite not versed rhetorical presenter.

. . .

Feel free to interrupt me and ask when something is not clear.

. . .

Or something worth discussing.

#What Clean Code stands for?

Clean code is a reader-focused development style that produces software that's easy to write, read and maintain.

#Why it matters?

##[Broken windows theory](https://en.wikipedia.org/wiki/Broken_windows_theory)

One *broken window* is all it takes to start the decline.

. . .

It's too easy to slip into the mindset of "All the rest of this code is crap, I'll just follow suit."

. . .

It's the software entropy.

. . .

So called: “software rot.”


#The four characteristics of Rotting software

From the book *Design Principles and Design Patterns* de *Robert C. Martins*

#1 - Rigidity

It's hard to solve simple problems.

No one knows how long will take to solve them.

Estimating is hard.

#2 - Fragility

The software breaks too often.

A change in one unrelated part breaks others.

Changes must be echoed in many places.

#3 - Immobility

It's the inability of reusing software from other places.

#4 - Viscosity

Its easier to go to the *hacking mode* than to the *design preservation* mode.

#Implications

[O preço da gambiarra](http://jeancarlomachado.com.br/#!/post/37)

. . .

Software rot implies in frustrated developers.

. . .

Frustrated developers implies in more rotting.

. . .

Too much rooting implies in system rewrite.


#Who's fault?

Managers

. . .

NOPS

. . .

DEVELOPERS

. . .

The clinical analogy

#Solution?

Good practices.

Software Wisdom.

Clean code!

Anyone can write code a computer can understand, but professional developers write code *humans* can understand.

#Literature


1. Clean code: A hand book of Agile Software craftsmanship; Robert C. Martin.
2. The pragmatical programmer; Andrew Hunt.
3. Code Complete
... Lot's more


> Those who do not remember the past are condemned to repeat it.
Jorge Agustin Nicolas Ruiz de Santayana y Borras


#Some Principles

Dear truth always deceiving simplicity. - John Green

Follow what suites you most.

. . .

Obviously this is not an exhaustive list.

#Principle - SOLID

Or the "first five principles" by Michael Feathers.

#Single responsibility principle

If you can think of more than one motive for changing a class, then that class has more than one responsibility.

#Open Close Principle

The interface is closed to modification - and new implementation must, at least, implement that interface.

#Liskov substitution principle

It's possible to change subclasses without breaking the program.

#Interface segregation principle

It's better more interfaces than less.

#Dependency inversion

One should depend only on abstractions.

#Principle - Dry

Don't Repeat Yourself

. . .

Two or more things are *orthogonal* if changes in one do not affect any of the others

#Benefits of Orthogonal Systems

- Eliminate effects between unrelated things.
- Changes are localized.
- Promotes reuse.
- Disease sections of code are isolated.
- The result system is less fragile.
- Better tested.
- Not tightly to a particular vendor.

#Principle - Law of Demeter

You don't ever, ever play with your toy's toys.

. . .

If you need to change an object's state, get the object to do it for you.

Any method of an object should call only methods belonging to:

- itself;
- any parameters received;
- any objects it creates and any directly held component objects.

#Principle - Composite Reuse

One should be build only upon interfaces.

##Benefits
- Easier to maintain (no unexpected behaviours);
- Performance gain;

Works flawlessly with traits.

---

```
//service user
class User
    implements AuthenticatedUserAwareInterface,
    ClientAwareInterface,
    ServiceLocatorAwareInterface,
    EntityManagerAwareInterface,
    PluginManagerAwareInterface
{
    use ClientAwareTrait;
    use AuthenticatedUserAwareTrait;
    use ServiceLocatorAwareTrait;
    use EntityManagerAwareTrait;
    use PluginManagerAwareTrait;

```

#Principle - Design by contract

Objects collaborate with each other on the basis of "mutual obligations and benefits". - Bertrand Meyer

. . .

Developing became the process of honoring contracts. :P

. . .

Accept few and promise few.

. . .

If your contract indicates that you'll accept anything and promise the world in return, then you've got a lot of code to write.

#Principle - The scout rule

Clean code is not about perfection.. It's about honesty.

. . .

We made our best to leave the camp cleaner than we find it?

#Practise

Tips for applying the previous principles.

#Functions Arguments

The ideal number of arguments of a function is ZERO.

. . .

More than tree is unacceptable.

. . .

Flag arguments are ugly.

They state a SRP violation.

#Function Returns

Output from function is not so good as well.

. . .

If functions must change a thing it must change itself.

(Demeter Law)

#Comments - Usage scenarios

Put in the dock block at least the authors name.

. . .

Attaching responsibility and accountability to the source code does wonders in keeping people honest.

. . .

Comments serves as well to discuss the purpose and trade-offs of implementations.

#Comments - Avoid scenarios

The usual aim of comments is to express the code.

. . .

So, if they are necessary there's a grand chance that the design smells.

. . .

Inaccurate comments are way worse than no comments at all.

#Comments - A bad case

```
/**
*
* @param $title The title of the CD
* @param $author The author of the CD
* @param $tracks The number of tracks of the CD
*
*/
public addCd($title, $author, int $tracks);
```
. . .

Clearly a DRY violation


#Documentation

Code and documentation are different views of the same underlying model.

Two places to edit models? DRY violation.

#Classes - Journal Metaphor (SRP)

Classes should be like journal articles.

. . .

In the header you get an general overview. 

You are able to decide if you go further or not.

. . .

As you read down details increases.

. . .

A journal is made of many little articles.

#Objects vs Data structures

In any good system the distinction of data structures and objects is clear.

. . .

Objects hide data and expose operations over it.

. . .

Data structures expose data and have no meaningful operation.

#Naming

Long names are generally better and simple names.

Complex operations can be made simple when intermediate variables are used.

. . .

Need to see the source for to know what a function does? Work on names!

. . .

If there's an ``And`` in a function name it's violating SRP.


#Conventions

Follow a coding standard, no matter which, but all the code must follow the chosen one.

##Examples for php
PSR2, Zend, Symphony, etc.

#Many little classes vs Few big ones

Some fear to have to browser in many files till find the right piece of code.

. . .

Many classes does not imply in comprehension damage.

. . .

The Many and the Few approaches both have the same amount of business logic to care of.

. . .

So the question is:

**You prefer your tools being organized in boxes with little compartments and good names?**

. . .

**Or only a compartment and all inside?**

#Many little classes are always better than few big ones

Any regular system will contain a vast quantity of logic

. . .

The first goal of managing complexity is organizing in a way developers know how to look for a certain thing, without having to worry about neighbour details.

. . .

We want our systems to have many little classes - not few big ones.

Relates to ISP.

#Abuse of Namespaces


``Inventory\Model\TradeStatusType.php``

Imagine if we extend this for a long period?

---

Hell!

```
Bonus.php
BonusRepository.php
BonusType.php
Client.php
ClientRepository.php
ClientSellerLevel.php
Payment.php
PaymentFrequency.php
PaymentMode.php
PaymentStatus.php
Privilege.php
PrivilegeRepository.php
PrivilegeType.php
```

And so on..

---

Much better:

``Inventory\Model\Trade\Status\Type.php``

#Remove is better than adding

> Perfection is attained not when there is nothing more to add, but when there is nothing more to remove.
Antoine de Saint-Exupéry


Don't let existing code dictate future code.

. . .

Be ready to refactor.

. . .

It may impact project schedule.

. . .

The assumption is that the impact will be less than the cost of not making the change.

#Object Calisthenics

Seven code qualities premisses:

- Cohesion;
- Loose coupling;
- No redundancy;
- Encapsulation;
- Testability;
- Readability;
- Focus;

[phpcs rules](https://github.com/object-calisthenics/phpcs-calisthenics-rules)

#1 - One level of indentation per method;

##Benefits
Finding bugs is much easier.

If you have more than one indentation level you have more than one abstraction level.

#2 - Don't use ELSE keyword;

Else's encourages the inclusion of more, intermediate, ifs.

Use polymorphism instead.

#3 - Wrap all primitives and Strings;

Small objects make programs more maintainable.

They serves as a container for logic that otherwise would be sparse.

#4 - First class collections

Any class with a collection shouldn't contain other member variables.

#5 - One dot per line;

Never:

```
this
    ->myMemberObjectMemberObject
    ->myMemberObjectMemberObject
    ->doFoo();
```

Much better:

```
this
    ->myMemberObjectMemberObject
    ->functionThatDoFooToo();
```

(Law of Demeter)

#6 - Don't abbreviate;

Abbreviation because of exhaustive use?

. . .

DRY violation.

. . .

Too long names?

. . .

Maybe a SRP problem.

#7 - Keep all entities small;

No classes over 50 lines and no packages over 10 files.

#8 - No classes with more than two instance variables.

A class *Name* with first, middle and last name might be decomposed to:

A class *Name* with a *Surname* class and a *GivenNames* class.

#9 - No getters/setters/properties


When you have the enough quantity of encapsulation provided from the previous rules you will never need to do any operation on the getters/setters.

#Testing clean code

Testing code use different pattens than production code.

They have different constraints.

There things you will never do in production code that in testing code is allowed.

Like memory and performance things.

. . .

But never clarity things.

#Meta programming

> Civilization advances by extending the number of important operations we can perform without thinking.
Alfred North Whitehead

What we want?


. . .

To go beyond using meta data for simple preferences.

. . .

We want to configure and drive the application via meta data as much as possible.

. . .

Our goal is to *think declaratively*.

. . .

And create highly dynamic and adaptable programs.

. . .

How?

. . .

Program for the general case, and put the specifics somewhere else - outside the code base.

#Metrics

Nice things to measure:

- Ciclomatic complexity;
- Inheritance fan-in (number of base classes);
- Inheritance fan-out (number of derived modules using this one as parent);
- Class coupling ratios

#No Magic

Never buy magic!

Before you commit to a framework, make sure you could write it.

. . .

Do this by actually writing something simple that does the basics that you need.

. . .

Make sure the magic all goes away.

#Conclusion

> Quality is a team issue.
Andy hunt.

Teams as a hole should not tolerate broken windows.

---

Obviously no one will ever do the hundred percent of what was here exposed.

But if we aim for the 80% where code needs the most.

We are cool.

Parts not critical to performance must be clean - not optimized.

---

Remember...


> The best programmers are 28 times best than the worst ones.
Robert Glass, [Facts and Fallacies of Software Engineering](http://www.amazon.com/Facts-Fallacies-Software-Engineering-Robert/dp/0321117425)

. . .

So there's always room for improvement.

. . .

Thanks for all!

