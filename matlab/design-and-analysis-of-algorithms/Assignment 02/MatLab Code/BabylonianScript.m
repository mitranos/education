numbers = [100, 23.25,98.89, 25, 10];
results = zeros(1,5);
for i = 1:5
   results(1, i) = BabylonianSquare(numbers(1,i));
end
disp(results);