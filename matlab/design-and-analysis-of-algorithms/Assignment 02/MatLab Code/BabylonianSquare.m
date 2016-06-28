function [ sqrt ] = BabylonianSquare( numb )
strNumb = num2str(numb);
split = strsplit(strNumb, '.');

ArraySize = size(split);

if ArraySize(2) == 2
    leftDigits = split(1);
    rightDigits = split(2);
else
    leftDigits = split(1);
    rightDigits = '0';
end

if numb >= 1
    ArrayOfChar = char(leftDigits);
    ArrayOfCharSize = size(ArrayOfChar);
    D = ArrayOfCharSize(2);
elseif numb < 1
    ArrayOfChar = char(rightDigits);
    ArrayOfCharSize = size(ArrayOfChar);
    count = 0;
    for j=1:ArrayOfCharSize(2)
        if ArrayOfChar(j) == '0'
            count = count + 1;
        end
    end
    D = -count; 
end

if mod(D,2) == 0
    D = ((2 * D) - 2)/2;
    xo = 6 * power(10,D/2);
else
    D = ((2 * D) - 1)/2;
    xo = 2 * power(10,D/2);
end

x = xo;
x1 = 0 * xo;
while ((power((x1 - xo), 2.0)) > 0.000001)
    xo = x1;
    x = 0.5 * (x + (numb / x));
    x1 = x;
end

sqrt = x;
end