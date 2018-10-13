### Strict_types and type hinting

Pros
- Improves code readability
- Easier debugging
- Code becomes more reusable
- Helps some IDE's for code autocompletion
- Helps diagnose errors and bugs earlier
- Helps testing
- Reduces type checking in code e.g if(is_array($arr)){}

Cons
- Hits php performance
- Less freedom

### Not using Strict_types and type hinting

Pros
- Slightly better performance
- More freedom. Meaning you can pass anything to a function


Cons
- Bad readability
- Less reusable code
- Need to write if statements which check param type
- Harder to write tests 
- Harder debugging
- Makes it harder for IDE's to autocomplete code