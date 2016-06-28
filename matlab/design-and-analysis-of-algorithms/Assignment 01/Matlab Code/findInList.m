list1 = [2, 5, 5, 5];
list2 = [2, 2, 3, 5, 5, 7];
result = [];

l1 = length(list1);
l2 = length(list2);


for i = 1:l1
    for j = 1:l2
        if(list1(i) == list2(j))
            if not(any(list1(i)==result))
                result = cat(1, result, list1(i));
            end
        end
    end
end

result'