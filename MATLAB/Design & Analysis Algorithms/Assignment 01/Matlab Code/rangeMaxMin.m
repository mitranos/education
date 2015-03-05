figure
matrix = zeros(150,150);
for n = 1:150
    for m = 1:150
        matrix(n,m) = Euclidean(n,m)
    end
end

h = bar3(matrix, 'detached');
for i = 1:length(h)
     zdata = get(h(i),'Zdata');
     set(h(i),'Cdata',zdata)
end