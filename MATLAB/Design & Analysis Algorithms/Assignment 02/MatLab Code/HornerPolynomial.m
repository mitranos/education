function [ xo ] = HornerPolynomial( coefficients , x )

xo = 0;
for i = (numel(coefficients):-1:1)
    xo = (xo * x) + coefficients(i);
end

end