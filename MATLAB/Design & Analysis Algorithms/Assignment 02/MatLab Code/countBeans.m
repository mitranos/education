function [ sum ] = countBeans()
x = zeros(64,1);
y = zeros(64,1);
sum = 0;
%# Get the data
for i = 1:64
    if i == 1
        sum = sum + 1;
    else
        sum = sum + sum;
    end
    x(i) = i;
    y(i) = sum;
end
%# Plot the data
plot(x,y, '-');
end

