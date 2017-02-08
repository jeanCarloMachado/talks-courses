Main title
==========


About
-----

[github.com/jeanCarloMachado](https://github.com/jeanCarloMachado)

[twitter.com/JeanCarloMachad](https://twitter.com/JeanCarloMachad)

[jeancarlomachado.com.br](http://jeancarlomachado.com.br/)

Title
-----

- List
- List
- List
- [List with link](https://doc.rust-lang.org/book/getting-started.html#platform-support)

Image
-----

![Who uses rust?](use-at-work.png)

Code
----

```rust
fn fib(n: u64) -> u64 {
    match n {
        0 | 1 =>  n,
        n => fib(n - 1) + fib(n - 2)
    }
}
```

----

Same "slide" but another page

```rust
fn gcd(mut n: u64, mut m: u64) -> u64 {
    assert!(n != 0 && m != 0);
    while m != 0 {
        if m < n {
            let t = m; m=n; n=t;
        }

        m = m % n;
    }
    n
}

```

Same slide load
---------------

start this way

. . .

load more


Libs
----

- [rustup](https://www.rustup.rs/) - croscompilling toolset
- [clap](http://kbknapp.github.io/clap-rs/clap/index.html) - parse command line args
- [iron](https://github.com/iron/iron) - Web framework
- [helix](https://github.com/rustbridge/helix) - ruby classes in Rust
- [racer](https://github.com/phildawes/racer) - auto-complete-er

References
----------

- Platforms: https://hacks.Mozilla.org/2015/05/diving-into-rust-for-the-first-time/
- Comparison: https://www.rust-lang.org/faq.html#other-languages
- Rust Programming Language: http://www.slideshare.net/jaejukim9/rust-programming-language
- State of Rust:
  https://blog.rust-lang.org/2016/06/30/State-of-Rust-Survey-2016.html
- Why Rust:
- Which programs are fastest: http://benchmarksgame.alioth.debian.org/u64q/which-programs-are-fastest.html http://www.oreilly.com/programming/free/files/why-rust.pdf

The end
-------

Thanks
